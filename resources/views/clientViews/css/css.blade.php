<style>
    body {
        margin: 0;
        padding: 0;
        /* background-color: rgb(255, 255, 255); */
        background-image: url(images/background.jpg);
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
    }

    .form-login h1 {
        padding: 20px;
        font-size: 3rem;
        margin-bottom: 2vh;
        font-family: 'Times New Roman', Times, serif;
        color: rgb(255, 255, 255);
        margin-left: 23%;
    }

    .form-login {
        background-color: rgba(0, 0, 0, 0.494);
        margin-left: 36%;
        margin-top: 5%;
        justify-content: center;
        width: 66vh;
        height: 75vh;
        /* border: 1px solid rgb(254, 254, 254); */
        border-radius: 20px;
    }

    .form-login input {
        background: transparent;
        cursor: pointer;
        padding: 5px;
        color: rgb(255, 253, 253);
        border: 0;
        border-bottom: 1px solid rgb(250, 250, 250);
        width: 37vh;
        margin-top: 3vh;
        margin-left: 10vh;
        padding: 10px;
    }

    ::placeholder {
        color: rgb(255, 255, 255);
    }

    .form-login input:hover {
        background-color: rgba(242, 247, 247, 0.161);
    }

    .checked input {
        display: inline-block;
        position: relative;
        margin-top: 3.5vh;
        background: transparent;
        border-radius: 10px;
        margin-left: -45px;
    }

    .checked input:hover {
        background-color: rgb(0, 0, 0);
    }

    .checked span {
        color: rgb(255, 255, 255);
        margin-top: 0;
        margin-left: -17vh;
    }

    .checked a {
        text-decoration: none;
        margin-left: 25px;
        color: rgb(63, 253, 0);
    }

    .checked a:hover {
        color: red;
        text-decoration: underline;
    }

    .checked a:active {
        color: rgb(255, 255, 255);
    }

    .loginpage button {
        margin-bottom: -15px;
        color: rgb(255, 255, 255);
        background-color: rgba(0, 45, 244, 0.69);
        font-size: 1rem;
        font-weight: bold;
        margin-top: 7%;
        margin-left: 33%;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 28%;
        height: 9%;
        border: 0;
        border-radius: 30px;
        cursor: pointer;
    }

    .loginpage button:hover {
        transition: 0.4s;
        /* transform: scale(1.1); */
        color: rgb(255, 255, 255);
        background-color: rgb(0, 167, 201);
    }

    .loginpage button:active {
        color: black;
        background-color: rgb(255, 255, 255);
    }

    .loginpage label {
        color: rgb(255, 255, 255);
        margin-left: -5vh;
        display: flex;
        justify-content: center;
    }

    label {
        margin-top: 20px;
        /* margin-left: 35%; */
        color: rgb(218, 242, 0);
    }

    #signup {
        text-decoration: none;
        display: flex;
        margin-top: -18px;
        color: rgb(81, 255, 0);
        margin-left: 67%;
    }

    #signup:hover {
        text-decoration: underline;
    }

    #signup:active {
        color: white;
    }

    .fa-facebook {
        width: 7vh;
        margin-left: 33%;
        font-size: 1.8rem;
        color: rgb(255, 255, 255);
    }

    .fa-facebook:hover {
        color: rgb(0, 255, 225);
    }

    .fa-twitter {
        width: 7vh;
        font-size: 1.8rem;
        color: rgb(255, 255, 255);
    }

    .fa-twitter:hover {
        color: rgb(0, 255, 225);
    }

    .fa-instagram {
        font-size: 1.8rem;
        color: rgb(255, 255, 255);
    }

    .fa-instagram:hover {
        color: rgb(0, 255, 225);
    }
</style>
