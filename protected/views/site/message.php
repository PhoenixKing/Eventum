<div class='messageContainer'>
    <h1><?php echo $title; ?></h1>
    <p><?php echo (isset($message)) ? $message : '';?></p>
</div>

<style type='text/css'>
    .messageContainer {
        width: 700px;
        padding: 5px 20px;
        margin: 20px auto;
        border: 1px #c9c9c9 solid;
        border-radius: 2px;
        box-shadow: 0px 0px 2px #c9c9c9;
    }
    .messageContainer>h1 {
        font-family: "Segoe UI";
        font-size: 17pt;
        margin: 5px 0px;
        padding: 0px;
    }
    .messageContainer>p {
        font-family: "Segoe UI";
        font-size: 11pt;
        margin: 0px 0px 10px 0px;
    }
</style>