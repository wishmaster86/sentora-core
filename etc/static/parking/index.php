<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $_SERVER['HTTP_HOST'] . " is parked...."; ?></title>
        <link rel="shortcut icon" type="image/x-icon" href="data:image/icon;base64,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">
        <style>
            html {
                height: 80%;
            }
            body {
                text-align:left;
                height:100%;
                background: #F3F3F3;
                font-size: 62.5%;
                font-family: 'Lucida Grande', Verdana, Arial, Sans-Serif;
                margin-top:10px;
                margin-bottom:10px;
                margin-right:10px;
                margin-left:10px;
                padding:0px;
            }
            body,td,th {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 9pt;
                color: #333333;
            }
            h1,h2,h3,h4,h5,h6 {
                font-family: Geneva, Arial, Helvetica, sans-serif;
            }
            h1 {
                font-size: 28px;
                font-weight:bold;
                color: #336;
                text-shadow:3px 3px 5px #BBBBBB;
            }
            a:link,a:visited,a:hover,a:active {
                color: #336;
                text-decoration:none;
            }
            ol{
                color:#336;
                font-size: 24px;
                font-weight:bold;
                text-shadow:3px 3px 5px #BBBBBB;
            }
            ol p{
                color:#CCCCCC;
                font: normal 12pt Verdana, Arial, Helvetica, sans-serif;
                color: #333333;
            }
            .content{
                background:#F1F4F6;
                background: #F1F4F6 url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAA6CAYAAAB4Q5OdAAAACXBIWXMAAAsTAAALEwEAmpwYAAAABGdBTUEAALGOfPtRkwAAACBjSFJNAAB6JQAAgIMAAPn/AACA6QAAdTAAAOpgAAA6mAAAF2+SX8VGAAABKklEQVR42mL8DwQMaAAggJgYsACAAMIqCBBAWAUBAgirIEAAYRUECCAWLJYzAAQQy38sKgECCKt2gADCKggQQFgFAQIIq0UAAYRVJUAAYRUECCCsggABhFUQIIBYsNjDABBAWFUCBBALAwOmUoAAwqoSIICwCgIEEFaLAAIIq0qAAMIqCBBAWAMEIICwqgQIIKyCAAGEVRAggLAKAgQQVkGAAMIqCBBAWJ0EEEBYVQIEEFZBgADCmmwAAgirSoAAwioIEEBYbQcIIKwqAQIIqyBAAGEVBAggrIIAAYQ14gACCKtKgADC6iSAAMKqEiCAsAoCBBBWQYAAwioIEEBYkyJAAGFVCRBAWAUBAgirjwACCGt0AAQQVu0AAYRVECCAsAoCBBDWAAEIMAAoCSZuy+v+UQAAAABJRU5ErkJggg==') repeat-x top;
                border:solid 1px #DFDFDF;
                margin: 10px 0;
                padding: 0 20px 10px;
                -moz-border-radius: 10px;
                border-radius: 10px;
                min-height: 90%;
            }
            .header_logo {
                display:block;
                max-width:263px;
                max-height:70px;
            }
            .header_logo img {
                width:100%;
                height:100%;
            }
            .poweredbox {
                font-family: Geneva, Arial, Helvetica, sans-serif;
                color:#333333;
                padding-left: 15px;
            }
        </style>
    </head>
    <body>

        <div class="content">
            <h1><?php echo strtolower($_SERVER['HTTP_HOST']); ?></h1>
            <p>This domain is registered and is currently parked.... </p>
            <p>Thank you for using us to manage your hosting!</p>
            
            <p>Kind regards,<br>
                Your hosting company.</p>
        </div>
        <div class="poweredbox">
            
        </div>
    </body>
</html>
