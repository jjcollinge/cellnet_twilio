<?xml version="1.0" encoding="UTF-8"?>
<Response>
    <?php
    if($_GET['AnsweredBy'] == 'human'){
    ?>
    <Say>Hi! We are going to connect you to... YOUR NAME</Say>
    <Dial>415-123-4567</Dial>
    <?php
    }else{
        // There was no answer - so we just hangup.
    ?>
    <Hangup/>
    <?php
    }
    ?>
</Response>