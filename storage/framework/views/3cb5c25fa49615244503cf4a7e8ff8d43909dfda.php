<style>
    @import  url(https://fonts.googleapis.com/css?family=Roboto:400,100,300,500);

    body {
        background-color: #f6d6d9;
        color: #7c232f;
        font-size: 100%;
        line-height: 1.5;
        font-family: "Roboto", sans-serif;
    }



    .button {
        font-weight: 300;
        color: #7c232f;
        font-size: 1.5em;
        text-decoration: none;
        border: 2px dashed #7c232f;
        padding: .5em;
        border-radius: 7px;

        position: relative;
        transition: all .3s linear;
    }

    .button:hover {
        background-color: #7c232f;
        color: #fff;
    }

    .text-center {
        text-align: center;
    }

    p {
        font-size: 2em;
        text-align: center;
        font-weight: 300;
        position: relative;
        top: -31px;

    }

    h1 {
        margin: 0px;
        text-align: center;
        font-size: 17em;
        font-weight: 300;

    }
</style>
<div class="error-page">
    <div class="col-md-12 text-center">
        <h1>404</h1>
        <p>Oops! Page Not Found.</p>
        <a class="button" href="<?php echo e(url('/')); ?>"><i class="icon-home"></i> Go Back To Home Page.</a>
    </div>
</div>
<?php /**PATH D:\xampp\htdocs\bfcpub\resources\views/errors/404.blade.php ENDPATH**/ ?>