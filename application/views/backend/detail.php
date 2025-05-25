<!DOCTYPE html>
<html>

    <head>
        <title> </title>
        <meta charset='utf-8'>
        <!-- <link rel="stylesheet" href="<?php //echo base_url() ?>/assets/css/bootstrap.css" /> -->

    </head>
    <style type="text/css" media="print">
    .hide {
        display: none
    }
    </style>
    <script type="text/javascript">
    function printpage() {
        document.getElementById('printButton').style.visibility = "hidden";
        window.print();
        // document.getElementById('printButton').style.visibility = "visible";
    }

    window.print();
    </script>
    <style>
    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        margin-top: 15%;
    }

    .invoiceHead p {
        margin: 0px;
    }

    .invoiceHead h3 {
        letter-spacing: 10px;
        font-size: unset;
        font-family: monospace;
        font-size: 30px;
        text-transform: uppercase;
        margin-bottom: 10px;
        margin-top: 10px;
    }
    </style>

    <body style="background:none;">
        <input name="print" type="button" value="Print" id="printButton" style="display: none;" onClick="printpage()">



        <!-----------------    Print Type -- POS      ------------>
        <div class="container">

            <div style="width:50%; float: left;">
                <img src="<?php echo base_url(); ?>img/I-TOUCH-LOGO-05.png" class="rounded mx-auto d-block" alt="Logo"
                    style="width: 34%;" />
            </div>
            <div style="width:50%; float: left;" class="invoiceHead">

                <?php $contact = $this->db->query("SELECT * FROM tbl_contact where status =1")->row(); 
                
              // Assuming the URL is like http://example.com/Product/view_master_detail/
                $url = $_SERVER['REQUEST_URI'];
                $parts = explode('/', $url);

                // Find the position of 'view_master_detail' in the URL
                $keyPosition = array_search('view_master_detail', $parts);
                $id = '';
                // If 'view_master_detail' is found in the URL, get the next part
                if ($keyPosition !== false && isset($parts[$keyPosition + 1])) {
                    $dataAfterViewMasterDetail = $parts[$keyPosition + 1];
                    $id =  $dataAfterViewMasterDetail;
                } else {
                  
                }
                
                ?>
                <h3>Invoice</h3>
                <p>#INV-0000<?php echo $id;?></p>
                <p>Phone:<?php echo $contact->phone.', '. $contact->phone2;?></p>
                <p>Email:<?php echo $contact->email.', '. $contact->email2;?></p>
                <p>Address:<?php echo strip_tags($contact->address)?></p>

                <br />
            </div>
        </div>
        <div class="container">
            <table cellspacing="0" cellpadding="0" width="100%">
                <tr>
                    <td colspan="2" style="background:#ddd;" align="center"><strong style="font-size:16px;">Order
                            detail</strong></td>
                </tr>
                <tr>
                    <!-- Customer html -->

                    <?php if (isset($customer_html)) {
              echo $customer_html;
            } ?>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
            </table>

            <table class="border" cellspacing="0" cellpadding="0" width="100%">
                <tr>
                    <th style="text-align:center;">SI No</th>
                    <th colspan="2" style="text-align:center;">Product Photo</th>
                    <th style="text-align:center;">Name</th>
                    <th style="text-align:center; width: 15%;">Quantity</th>
                    <th style="text-align:center;">Price</th>
                    <th style="text-align:center;">total</th>
                </tr>



                <?php if (isset($detail_html)) {
              echo $detail_html;
            } ?>



            </table>

        </div>
        <style>
        tr td {
            border-top: 1px solid black;
        }
        </style>

    </body>

</html>