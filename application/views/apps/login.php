<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login - Medical Top Team Administrator System</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url() ?>resources/backend/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>resources/backend/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>resources/backend/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>resources/backend/plugins/iCheck/square/blue.css">
    <script src="<?php echo base_url() ?>resources/backend/plugins/jQuery/jquery-2.2.3.min.js"></script>

    <style>
      .item-transition {
        transition: opacity .5s ease;
      }
      .item-enter {
        opacity: 0;
      }
      .item-leave {
        opacity: 0;
        display: none;
        position: absolute;
      }
      .fade-transition {
        transition: opacity .3s ease;
      }
      .fade-enter, .fade-leave {
        opacity: 0;
      }

    </style>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%'
            });
        });
        var base_url = '<?php echo base_url();?>';
    </script>
</head>
<body class="hold-transition login-page">
<div class="login-box" id="app">
    <div class="login-logo" style="font-size: 25px">
        <a href="<?php echo base_url() ?>">{{SiteName}}</a>
    </div>
    <div class="login-box-body" style="-moz-box-shadow: 1px 1px 2px 0 rgba(0,0,0,.12);webkit-box-shadow: 1px 1px 2px 0 rgba(0,0,0,.12);box-shadow: 1px 1px 2px 0 rgba(0,0,0,.12);">
        <p class="login-box-msg">{{Authentication}}</p>
        <notification
          v-bind:show-success="showNotifSuccess"
          v-bind:success-message="successMessage"
          v-bind:show-error="showNotifError"
          v-bind:error-message="errorMessage">
        </notification>
        <form v-on:submit="login">
        <div class="form-group has-feedback">
            <input type="text" class="form-control" name="identity" v-model="identity" placeholder="Username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" v-model="password" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> Remember Me
                    </label>
                </div>
            </div>
            <div class="col-xs-4">
                <button type="submit" class="btn bg-olive btn-block btn-flat">Login <i class="fa fa-unlock"></i> </button>
            </div>

        </div>
        <?php echo form_close(); ?>
        <hr>
        <div class="social-auth-links text-center">
            <p> Forgot Password ? </p>
            <a href="" class="btn bg-orange btn-flat" style="text-align: center;width: 100%"><i class="fa fa-envelope"></i> Get new password</a>
        </div>
    </div>

    <template id="notification">
      <div class="box-header" v-if="showSuccess" transition="item">
        <div class="alert alert-success alert-dismissible">
          <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> -->
          <h4><i class="icon fa fa-check"></i> Success!</h4>
          {{{ successMessage }}}
        </div>
      </div>
      <div class="box-header" v-if="showError" transition="item">
        <div class="alert alert-danger alert-dismissible">
          <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> -->
          <h4><i class="icon fa fa-ban"></i> Error!</h4>
          {{{ errorMessage }}}
        </div>
      </div>
    </template>
    <div class="text-center" style="margin-top: 10px;font-size: 15px;padding: 6px 6px">
        {{SiteFooter}}
    </div>
</div>
<script src="<?php echo base_url() ?>resources/backend/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>resources/backend/plugins/iCheck/icheck.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>build/vue.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>build/vue-router.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>build/vue-animated-list.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>build/vue-validator.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>build/bundle/login.js"></script>
</body>
</html>
