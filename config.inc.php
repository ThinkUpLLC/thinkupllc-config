<?php
/**
 * To see what your tout copy will look like in an email, set if date line to if (true), then run
 *
 * $ TEST_DEBUG=1 php webapp/plugins/insightsgenerator/tests/TestOfInsightsGeneratorPlugin.php -t  testMandrillHTMLThinkUpLLCUnsubLinkWithOutWelcomeMessage > webapp/email.html
 *
 */


if (date('Y-m-d') == '2015-07-01') {
// if (true) {
    $THINKUP_CFG['thinkupllc_email_tout'] = 'NEW: Search your followers and get insights for Instagram! <a href="http://blog.thinkup.com/post/122853360732/super-powers-for-your-social-networks-thinkups"><strong style="color: black;">Check it out.</strong></a>';
}

