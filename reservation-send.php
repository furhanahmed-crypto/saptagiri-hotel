<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'php-mailer/PHPMailer.php';
require 'php-mailer/SMTP.php';
require 'php-mailer/Exception.php';

$redirect = 'thank-you.php?type=reservation';

if (
    isset($_POST['name']) &&
    isset($_POST['phone']) &&
    isset($_POST['checkin']) &&
    isset($_POST['checkout'])
) {

    $name     = trim($_POST['name']);
    $phone    = trim($_POST['phone']);
    $email    = isset($_POST['email']) ? trim($_POST['email']) : '';
    $checkin  = trim($_POST['checkin']);
    $checkout = trim($_POST['checkout']);
    $notes    = isset($_POST['notes']) ? trim($_POST['notes']) : 'None';

    $roomDetails = [];
    if (isset($_POST['rooms']) && is_array($_POST['rooms'])) {
        $roomTypes = $_POST['rooms'];
        $roomGuests = isset($_POST['room_guests']) && is_array($_POST['room_guests'])
            ? $_POST['room_guests']
            : [];

        foreach ($roomTypes as $index => $selectedRoom) {
            $selectedRoom = trim($selectedRoom);
            $guestCount = isset($roomGuests[$index]) ? trim($roomGuests[$index]) : '';

            if ($selectedRoom === '' && $guestCount === '') {
                continue;
            }

            $roomDetails[] = [
                'type' => $selectedRoom !== '' ? $selectedRoom : 'Not specified',
                'guests' => $guestCount !== '' ? $guestCount : 'Not specified',
            ];
        }
    } elseif (isset($_POST['room'])) {
        $legacyRoom = trim($_POST['room']);
        $legacyGuests = isset($_POST['guests']) ? trim($_POST['guests']) : 'Not specified';
        if ($legacyRoom !== '') {
            $roomDetails[] = [
                'type' => $legacyRoom,
                'guests' => $legacyGuests,
            ];
        }
    }

    if (count($roomDetails) === 0) {
        header('Location: reservation.php?error=1');
        exit;
    }

    $roomSummaryLines = [];
    foreach ($roomDetails as $index => $detail) {
        $roomSummaryLines[] = 'Room ' . ($index + 1) . ': ' . $detail['type'] . ' (' . $detail['guests'] . ' guest' . ($detail['guests'] === '1' ? '' : 's') . ')';
    }
    $roomSummary = implode('<br>', array_map('htmlspecialchars', $roomSummaryLines));

    $mail = new PHPMailer(true);

    $mail->IsSMTP();
    $mail->SMTPAuth = false;
    $mail->Port = 25;
    $mail->Host = 'localhost';
    $mail->Username = 'info@hotelsaptagiri.in';
    $mail->Password = 'info@hotelsaptagiri';

    $mail->IsSendmail();

    $mail->From = 'info@hotelsaptagiri.in';
    $mail->FromName = 'Hotel Saptagiri';
    $mail->AddAddress('reservations@hotelsaptagiri.in');
    $mail->AddAddress('itz.me.farhan6710@gmail.com');

    $mail->Subject = 'New reservation from ' . $name;
    $mail->WordWrap = 80;

    $body = 'New reservation request<br><br>'
        . '<strong>Name:</strong> ' . htmlspecialchars($name) . '<br>'
        . '<strong>Phone:</strong> ' . htmlspecialchars($phone) . '<br>'
        . '<strong>Email:</strong> ' . htmlspecialchars($email !== '' ? $email : 'Not provided') . '<br>'
        . '<strong>Check-in:</strong> ' . htmlspecialchars($checkin) . '<br>'
        . '<strong>Check-out:</strong> ' . htmlspecialchars($checkout) . '<br>'
        . '<strong>Room' . (count($roomDetails) > 1 ? 's' : '') . ':</strong><br>' . $roomSummary . '<br><br>'
        . '<strong>Special Requests:</strong><br>' . nl2br(htmlspecialchars($notes));

    $mail->MsgHTML($body);
    $mail->IsHTML(true);

    try {
        $mail->Send();
        header('Location: ' . $redirect);
        exit;
    } catch (Exception $e) {
        error_log('Reservation mail error: ' . $mail->ErrorInfo);
        header('Location: reservation.php?error=1');
        exit;
    }
} else {

    header('Location: reservation.php?error=1');
    exit;
}
