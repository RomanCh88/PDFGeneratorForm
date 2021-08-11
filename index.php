<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PDF Generator</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" crossorigin="anonymous">

</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="rendered-form">
                    <form action="generator.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="formbuilder-text form-group field-booking-ref">
                                    <label for="booking-ref" class="formbuilder-text-label">หมายเลขการจองห้องพัก (booking-ref)<span
                                            class="tooltip-element" tooltip="Booking ref"></span></label>
                                    <input type="text" class="form-control" name="booking-ref" access="false"
                                        id="booking-ref" title="Booking ref">
                                </div>
                                <div class="formbuilder-text form-group field-check-in">
                                    <label for="check-in" class="formbuilder-text-label">วันทีเช็คอิน (check-in)<span
                                            class="tooltip-element" tooltip="ChekIn"></span></label>
                                    <input type="text" class="form-control" name="check-in" access="false" id="check-in"
                                        title="ChekIn">
                                </div>
                                <div class="formbuilder-text form-group field-check-out">
                                    <label for="check-out" class="formbuilder-text-label">วันทีเช็คเอ้าท (check-out)<span
                                            class="tooltip-element" tooltip="CheckOut"></span></label>
                                    <input type="text" class="form-control" name="check-out" access="false"
                                        id="check-out" title="CheckOut">
                                </div>
                                <div class="formbuilder-text form-group field-number-nights">
                                    <label for="number-nights" class="formbuilder-text-label">จาํ นวนห้องพัก (number-nights)
                                        <br><span class="tooltip-element" tooltip="Number of nights"></span></label>
                                    <input type="text" class="form-control" name="number-nights" access="false"
                                        id="number-nights" title="Number of nights">
                                </div>
                                <div class="formbuilder-text form-group field-number-rooms">
                                    <label for="number-rooms" class="formbuilder-text-label">จาํ นวนผู้ใหญ่&nbsp; (number-rooms)
                                        <br><span class="tooltip-element" tooltip="Number of rooms"></span></label>
                                    <input type="text" class="form-control" name="number-rooms" access="false"
                                        id="number-rooms" title="Number of rooms">
                                </div>
                                <div class="formbuilder-text form-group field-number-guests">
                                    <label for="number-guests" class="formbuilder-text-label">จาํ นวนผู้ใหญ่จาํ
                                        นวนเด็ก (number-guests)<span class="tooltip-element" tooltip="Number of guest"></span></label>
                                    <input type="text" class="form-control" name="number-guests" access="false"
                                        id="number-guests" title="Number of guest">
                                </div>
                                <div class="formbuilder-text form-group field-additional-amount">
                                    <label for="additional-amount" class="formbuilder-text-label">จาํ นวนเพิมเติม (additional-amount)
                                        <br><span class="tooltip-element" tooltip="Additional amount"></span></label>
                                    <input type="text" class="form-control" name="additional-amount" access="false"
                                        id="additional-amount" title="Additional amount">
                                </div>
                                <div class="formbuilder-text form-group field-room-type">
                                    <label for="room-type" class="formbuilder-text-label">ประเภทห้องพัก (room-type)<span
                                            class="tooltip-element" tooltip="Room type"></span></label>
                                    <input type="text" class="form-control" name="room-type" access="false"
                                        id="room-type" title="Room type">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="formbuilder-text form-group field-promo-code">
                                    <label for="promo-code" class="formbuilder-text-label">Promotion code<span
                                            class="tooltip-element" tooltip="Promo code"></span></label>
                                    <input type="text" class="form-control" name="promo-code" access="false"
                                        id="promo-code" title="Promotion code">
                                </div>
                                <div class="formbuilder-text form-group field-book-from">
                                    <label for="book-from" class="formbuilder-text-label">จองจาก (book-from)<span
                                            class="tooltip-element" tooltip="Book from"></span></label>
                                    <input type="text" class="form-control" name="book-from" access="false"
                                        id="book-from" title="Book from">
                                </div>
                                <div class="formbuilder-text form-group field-amount-paid">
                                    <label for="amount-paid" class="formbuilder-text-label">จาํ นวนเงิน (amount-paid)<span
                                            class="tooltip-element" tooltip="Amount paid"></span></label>
                                    <input type="text" class="form-control" name="amount-paid" access="false"
                                        id="amount-paid" title="Amount paid">
                                </div>
                                <div class="formbuilder-text form-group field-payment-status">
                                    <label for="payment-status" class="formbuilder-text-label">สถานะการชาํ ระเงิน (payment-status)<span
                                            class="tooltip-element" tooltip="Payment status"></span></label>
                                    <input type="text" class="form-control" name="payment-status" access="false"
                                        id="payment-status" title="Payment status">
                                </div>
                                <div class="formbuilder-text form-group field-payment-platform">
                                    <label for="payment-platform" class="formbuilder-text-label">ช่องทางการชาํ ระ (payment-platform)<span
                                            class="tooltip-element" tooltip="Payment platform"></span></label>
                                    <input type="text" class="form-control" name="payment-platform" access="false"
                                        id="payment-platform" title="Payment platform">
                                </div>
                                <div class="formbuilder-text form-group field-payment-date">
                                    <label for="payment-date" class="formbuilder-text-label">วันทีชาํ ระเงิน (payment-date)<span
                                            class="tooltip-element" tooltip=" Payment date"></span></label>
                                    <input type="text" class="form-control" name="payment-date" access="false"
                                        id="payment-date" title=" Payment date">
                                </div>
                                <div class="formbuilder-text form-group field-check-in-out-time">
                                    <label for="check-in-out-time" class="formbuilder-text-label">เวลาเช็คอิน/เอ้าท (check-in-out-time)<span
                                            class="tooltip-element" tooltip="Check in/out time"></span></label>
                                    <input type="text" class="form-control" name="check-in-out-time" access="false"
                                        id="check-in-out-time" title="Check in/out time">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="formbuilder-button form-group field-button-1628707855925">
                                    <button type="submit" class="btn-success btn" name="button-1628707855925"
                                        access="false" style="success" id="button-1628707855925">Generate PDF</button>
                                </div>
                            </div>
                        </div>



                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery.min.js" crossorigin="anonymous">
    </script>
</body>

</html>
