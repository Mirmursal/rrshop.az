<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bizimlə Əlaqə</title>

    <link rel="icon" href="../assets/images/myLogo/mm-icon-circle.png">
    <!-- links here -->
    <?php $this->load->view("dependencies/style");?>
</head>

<body>

    <!-- header begin -->
    <?php include "header.php"; ?>
    <!-- header end -->
    <!-- content begin -->

    <div class="columns-container">
        <div class="container" id="columns">
            <h2 class="page-heading">Bizimlə əlaqə</h2>
            <form action="#" id="myform" method="POST">
                <div class="contact-form-box">
                    <div class="form-selector">
                        <label>Ad və Soyadınız</label>
                        <input type="text" name="surname" value="" class="form-control input-sm" required="">
                        <div class="form-selector">
                            <label>Email adresiniz
                                <span style="color: coral">*</span>
                            </label>
                            <input type="email" name="email" value="" class="form-control input-sm">
                        </div>
                        <div class="form-selector">
                            <label>Telefon nömrəniz
                                <span style="color: coral">*</span>
                            </label>
                            <input type="email" name="tel" value="" class="form-control input-sm">
                        </div>
                        <div class="form-selector">
                            <label>Mətn
                                <span style="color: coral">*</span>
                            </label>
                            <textarea rows="10" required="" name="full" class="form-control input-sm"></textarea>
                        </div>
                        <div class="form-selector">
                            <button type="submit" class="btn btn-success">Göndər</button>
                        </div>
                        <input id="js_token_key" name="js_token_key" value="2f1d86afd28246f97f52c628e2fa9756" type="hidden">
                        <input id="js_token_hdd" name="js_token_hdd" value="5b508b5ec83c6" data-dd="9620fe452f2ed0a8f6b0219cd383b7c2" type="hidden"> </div>
                </div>
            </form>
        </div>

    </div>

    <!-- content end -->

    <!-- footer begin -->
    <?php include "footer.php" ; ?>

    <!-- footer end -->
    <!-- scrool here -->
    <a href="#" class="scroll_top" title="Scroll to Top">Scroll</a>
    <!-- scroll here -->
      <!-- script links here -->
    <?php $this->load->view("dependencies/scripts");?>

</body>

</html>