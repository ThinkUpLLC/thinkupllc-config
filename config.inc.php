<?php
/**
 * To see what your tout copy will look like in an email, set if date line to if (true), then run
 * 
 * $ TEST_DEBUG=1 php webapp/plugins/insightsgenerator/tests/TestOfInsightsGeneratorPlugin.php -t  testMandrillHTMLThinkUpLLCUnsubLinkWithOutWelcomeMessage > webapp/email.html
 * 
 */

if (date('Y-m-d') == '2014-05-07') {
//if (true) {
    $THINKUP_CFG['thinkupllc_email_tout'] = 'New! ThinkUp insights now celebrate your <a href="http://blog.thinkup.com/post/84828127412/the-f-you-say" style="color: #2785D3;">LOLs, thanks, and F-bombs</a>.';
}

if (date('Y-m-d') == '2014-05-08') {
//if (true) {
    $THINKUP_CFG['thinkupllc_email_tout'] = 'New on our blog: <a href="http://blog.thinkup.com/post/84831591137/thinkups-investor-update-for-april-2014" style="color: #2785D3;">ThinkUp’s investor update for April 2014</a>';
}

if (date('Y-m-d') == '2014-05-09') {
//if (true) {
    $THINKUP_CFG['thinkupllc_email_tout'] = 'Well, look at that: <a href="http://blog.thinkup.com/post/84453987487/sharing-insights-just-got-easier" style="color: #2785D3;">Sharing ThinkUp insights just got easier.</a>';
}

