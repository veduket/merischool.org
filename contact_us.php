<?php require("_header.inc.php");?>
<body id="index">
  <?php require("_navigation.inc.php"); ?>
  <div class='container '>
    <!--Begin content -->
    <div class="add-comment styled boxed boxed-cream" id="addcomments">
    <span class="add-comment-close">×</span>
    <div class="add-comment-title gradient"><h3>ሃሳብዎን ይላኩልን</h3></div>
    <div class="comment-form">
        <form action="#" method="post" id="commentForm" class="ajax_form">
            <div class="form-inner">
              <div class="field_text">
                  <label for="subject" class="label_title">ሥም:</label>
                  <input type="text" name="contact_name" id="contact_name" value="" placeholder="ምሳሌ፡- አበበ ከበደ" class="inputtext input_middle required" />
              </div>
                <div class="field_select">
                    <label for="contact_name" class="label_title">ጉዳዩ:</label>
                    <select name="subject" id="subject" multiple data-placeholder="ከዝርዝሩ ይምረጡ">
                        <option value='ስለ ድረ ገጻችሁ'>ስለ ድረ ገጻችሁ</option>
                        <option value='ስለ ትምህርት አሰጣጥ'>ስለ ትምህርት አሰጣጥ</option>
                        <option value='ስለ ተማሪዎች የደምብ ልብስ'>ስለ ተማሪዎች የደምብ ልብስ</option>
                        <option value='ከ ትምህርት ቤታችሁ ጋር አብሮ ሥለመስራት'>ከ ትምህርት ቤታችሁ ጋር አብሮ ሥለመስራት</option>
                        <option value='ሌሎች ጉዳዮች'>ሌሎች ጉዳዮች</option>
                    </select>
                </div>

                <div class="clear"></div>
                <div class="field_text field_textarea">
                    <div id="edit_buttons" class="edit_buttons gradient"></div>
                    <label for="styled_message" class="label_title">መልዕክት:</label>
                    <textarea cols="30" rows="10" name="styled_message" id="styled_message" class="textarea textarea_middle"></textarea>
                </div>
                <div class="clear"></div>
            </div>

            <div class="rowSubmit">
                <a onclick="document.getElementById('commentForm').reset();return false" href="#" class="link-reset btn btn-white"><span>ይቅር</span></a>
                <span class="btn"><input type="submit" id="send" value="ላክ" /></span>
            </div>
        </form>
    </div>
</div>
    <!-- End of content-->
  </div>
<?php require("_footer.inc.php");?>
<script type="text/javascript">

    // Multiselect
    jQuery(document).ready(function() {
        jQuery('#subject').chosen({ width: "100%" });
    });

    // Text Editor
    bkLib.onDomLoaded(function() {
        var myNicEditor = new nicEditor({
            buttonList : [
                'bold',
                'italic',
                'underline',
                'forecolor',
                'left',
                'center',
                'right',
                'justify'
            ]
        });
        myNicEditor.setPanel('edit_buttons');
        myNicEditor.addInstance('styled_message');
    });
    setTimeout(function () {
        var nic_width = $('.nicEdit-panel').width();
        $('.nicEdit-container').css('width', nic_width);
        $('.nicEdit-main').css('width', nic_width-24);
    }, 2000);
    $(window).resize(function() {
        var nic_width = $('.nicEdit-panel').width();
        $('.nicEdit-container').css('width', nic_width);
        $('.nicEdit-main').css('width', nic_width-24);
    });

</script>
</body>
</html>
