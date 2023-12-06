<?php
$this->section("content");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>bs4 profile contacts - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            background: #DCDCDC;
            margin-top: 20px;
        }

        .card-box {
            padding: 20px;
            border-radius: 3px;
            margin-bottom: 30px;
            background-color: #fff;
            display: table;
        }

        .social-links li a {
            border-radius: 50%;
            color: rgba(121, 121, 121, .8);
            display: inline-block;
            height: 30px;
            line-height: 27px;
            border: 2px solid rgba(121, 121, 121, .5);
            text-align: center;
            width: 30px
        }

        .social-links li a:hover {
            color: #797979;
            border: 2px solid #797979
        }

        .thumb-lg {
            height: 88px;
            width: 88px;
        }

        .img-thumbnail {
            padding: .25rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: .25rem;
            max-width: 100%;
            height: auto;
        }

        .text-pink {
            color: #ff679b !important;
        }

        .btn-rounded {
            border-radius: 2em;
        }

        .text-muted {
            color: #98a6ad !important;
        }

        h4 {
            line-height: 22px;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="content">
        <div class="container">
            <div class="row">

            </div>
            <?php
            foreach ($users as $user) {
                ?>
                <button class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light" onclick="deleteUsers(<?= $user->id; ?>)">delete user</button>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="text-center card-box">
                            <div class="member-card pt-2 pb-2">
                                <div class="thumb-lg member-thumb mx-auto"><img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                <div class>
                                    <h4><?= $user->name; ?></h4>
                                    <p class="text-muted">@Founder <span>| </span><span><a href="#" class="text-pink">websitename.com</a></span></p>
                                </div>
                                <ul class="social-links list-inline">
                                    <li class="list-inline-item"><a title data-placement="top" data-toggle="tooltip" class="tooltips" href data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a title data-placement="top" data-toggle="tooltip" class="tooltips" href data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a title data-placement="top" data-toggle="tooltip" class="tooltips" href data-original-title="Skype"><i class="fa fa-skype"></i></a></li>
                                </ul>
                                <button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Visualizar perfil</button>
                                <div class="mt-4">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>2563</h4>
                                                <p class="mb-0 text-muted">Wallets Balance</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>6952</h4>
                                                <p class="mb-0 text-muted">Income amounts</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>1125</h4>
                                                <p class="mb-0 text-muted">Total Transactions</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" async>
            async function deleteUsers(user_id) {
                 async function request(url, options) {
                    try {
                        const response = await fetch(url, options);
                        const data = await response.json();
                        return data;
                    } catch (err) {
                        console.error(err);
                        return {
                            type: "error",
                            message: err.message
                        };
                    }
                }

                const url = "<?php echo url("api/user/delete/"); ?>"; + user_id;
                console.log(url)

                const options = {
                    method: "GET"
                };

                const data = await request(url, options);
            }
        </script>
</body>

</html>