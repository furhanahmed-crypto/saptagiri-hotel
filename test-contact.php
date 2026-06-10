<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test Contact | Hotel Saptagiri</title>
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
</head>
<body>
<div class="container" style="margin-top: 40px; margin-bottom: 40px;">
    <h2>Test Contact Form</h2>
    <p class="text-muted">Simple mail test for GoDaddy (posts to send.php).</p>

    <div class="col-md-8">
        <div class="well well-sm">

            <form method="post" action="send.php">

                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                placeholder="Enter name"
                                required="required"
                            />
                        </div>

                        <div class="form-group">
                            <label for="email">Email Address</label>

                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                </span>

                                <input
                                    type="email"
                                    name="email"
                                    class="form-control"
                                    id="email"
                                    placeholder="Enter email"
                                    required="required"
                                />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject</label>

                            <select
                                id="subject"
                                name="subject"
                                class="form-control"
                                required="required"
                            >
                                <option value="na" selected="">Choose One</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="message">Message</label>

                            <textarea
                                name="message"
                                id="message"
                                class="form-control"
                                rows="9"
                                cols="25"
                                required="required"
                                placeholder="Message"
                            ></textarea>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <button
                            type="submit"
                            class="btn btn-primary pull-right"
                            id="btnContactUs"
                        >
                            Send Email
                        </button>
                    </div>

                </div>

            </form>

        </div>
    </div>
</div>
</body>
</html>
