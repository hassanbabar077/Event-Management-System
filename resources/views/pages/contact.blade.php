@extends('layout.app')
@section('centent')
<style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@200&display=swap");
        $color-gray: #515151;
        $color-black: #000;

        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Roboto", sans-serif;
        }

        .form-main {
            background: linear-gradient(to bottom, #00000024, #00000024),
                /* url(https://res.cloudinary.com/dqifboxk5/image/upload/v1686209968/contact-us-2_y8zzx7.jpg) */
                no-repeat center;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            .main-wrapper {
                border-radius: 10px;
                padding: 45px;
                width: 40%;
                box-shadow: 0 0 5px 5px #00000020;
                backdrop-filter: blur(5px);
                background-color: #ffffff85;

                @media screen and (max-width: 991px) {
                    width: 70%;
                }

                @media screen and (max-width: 767px) {
                    width: 90%;
                }

                .form-head {
                    font-size: 30px;
                    line-height: 40px;
                    font-weight: 600;
                    text-align: center;
                    margin: 0px 0 25px;
                }

                .form-wrapper {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-direction: column;
                    gap: 15px;

                    .form-card {
                        position: relative;
                        width: 100%;

                        .form-input {
                            padding: 20px 25px 15px;
                            width: 100%;
                            border: 1px solid $color-black;
                            border-radius: 5px;
                            background: transparent;
                            outline: none;
                            font-size: 20px;
                            line-height: 30px;
                            font-weight: 400;
                            box-sizing: border-box;

                            &:valid,
                            &:focus {
                                border: 1px solid $color-gray;
                            }

                            &:valid~.form-label,
                            &:focus~.form-label {
                                color: $color-gray;
                                top: 30%;
                                transform: translateY(-70%);
                                font-size: 13px;
                                line-height: 23px;
                            }

                            &:-webkit-autofill,
                            &:-webkit-autofill:hover,
                            &:-webkit-autofill:focus,
                            &:-webkit-autofill:active {
                                transition: background-color 9999s ease-in-out 0s;
                            }

                            &::-webkit-outer-spin-button,
                            &::-webkit-inner-spin-button {
                                -webkit-appearance: none;
                                margin: 0;
                            }
                        }

                        .form-label {
                            position: absolute;
                            left: 25px;
                            top: 50%;
                            transform: translateY(-50%);
                            pointer-events: none;
                            transition: 0.3s;
                            margin: 0;
                            font-size: 18px;
                            line-height: 28px;
                            font-weight: 500;
                        }

                        .form-textarea {
                            padding: 20px 25px 15px;
                            width: 100%;
                            border: 1px solid $color-black;
                            border-radius: 5px;
                            background: transparent;
                            outline: none;
                            font-size: 20px;
                            line-height: 30px;
                            font-weight: 400;
                            display: -webkit-box;
                            -webkit-line-clamp: 3;
                            -webkit-box-orient: vertical;
                            overflow: hidden;
                            resize: none;
                            box-sizing: border-box;

                            &:valid,
                            &:focus {
                                border: 1px solid $color-gray;
                            }

                            &:valid~.form-textarea-label,
                            &:focus~.form-textarea-label {
                                color: $color-gray;
                                top: 18%;
                                transform: translateY(-82%);
                                font-size: 13px;
                                line-height: 23px;
                            }

                            &:-webkit-autofill,
                            &:-webkit-autofill:hover,
                            &:-webkit-autofill:focus,
                            &:-webkit-autofill:active {
                                transition: background-color 9999s ease-in-out 0s;
                            }
                        }

                        .form-textarea-label {
                            position: absolute;
                            left: 25px;
                            top: 30%;
                            transform: translateY(-70%);
                            pointer-events: none;
                            transition: 0.3s;
                            margin: 0;
                            font-size: 18px;
                            line-height: 28px;
                            font-weight: 500;
                        }
                    }
                }
            }
        }

        .btn-wrap {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 16px 0 0;
        }

        .btn-wrap button {
            padding: 0 32px;
            font-size: 18px;
            line-height: 48px;
            border: 1px solid transparent;
            font-weight: 600;
            border-radius: 6px;
            transition: all 0.5s ease;
            cursor: pointer;
            box-shadow: 0 0 5px 5px #00000020;
        }

        .btn-wrap button:hover {
            border: 1px solid #000;
            background: transparent;

        }
    </style>
</head>

<body>
    <div class="form-main">
        <div class="main-wrapper">
            <h2 class="form-head">Contact From</h2>
            <form class="form-wrapper" action={{ route('query') }} method="POST">
                @csrf
                <div class="form-card">
                    <input class="form-input" type="text" name="name" required="required" />
                    <label class="form-label" for="name">Full Name</label>
                </div>

                <div class="form-card">
                    <input class="form-input" type="email" name="email" required="required" />
                    <label class="form-label" for="email">Email</label>
                </div>

                <div class="form-card">
                    <input class="form-input" type="number" name="number" required="required" />
                    <label class="form-label" for="number">Number</label>
                </div>

                <div class="form-card">
                    <input class="form-input" type="text" name="message" required="required" />
                    <label class="form-textarea-label" for="message">Message</label>
                </div>
                <div class="btn-wrap">
                    <button> Submit </button>
                </div>
            </form>
        </div>
    </div>
    @endsection

