<?php require("_header.inc.php");?>
<body id="index">
  <?php require("_navigation.inc.php"); ?>
  <?php require("_landing_slider.inc.php");?>
  <div class='container '>
    <!--Begin content -->
    <!-- End of content-->
    <?php require("_three_col_content.inc.php");?>
  </div>
<?php require("_footer.inc.php");?>
<script type="text/javascript">
    $(function() {
        var graphwidth = $('.widget_graph .inner').width();
        $('.widget_graph .graph').css('height', parseInt(graphwidth/1.7));
        $(window).resize(function() {
            graphwidth = $('.widget_graph .inner').width();
            $('.widget_graph .graph').css('height', parseInt(graphwidth/1.7));
        });

        var d1 = [[0, 9], [1, 23], [1.8, 7], [2.2, 24], [2.8, 18], [4, 36]];
        var d2 = [[0, 0], [1, 4], [2, 16], [3, 24], [2.8, 18], [4, 36]];
        $.plot("#graph1",[d1]);
        $.plot("#graph2",[d2]);
        var graphholder = $("#graph");
        var plot = $.plot(graphholder, [d1], {
            colors: ["#669146", "#afd8f8", "#cb4b4b", "#4da74d", "#9440ed"],
            xaxis: {
                min: null,
                max: null
            },
            yaxis: {
                autoscaleMargin: 0.02
            },
            series: {
                lines: {
                    show: true,
                    lineWidth: 2,
                    fill: true,
                    fillColor: "rgba(188,176,150,0.3)"
                },
                points: {
                    show: true,
                    radius: 4,
                    lineWidth: 2,
                    fillColor: "#f6f3ee"
                }
            },
            grid: {
                hoverable: true,
                clickable: true,
                margin: 12,
                color: "#a09d96",
                borderColor: "#b7ab92"
            }

        });

        function showTooltip(x, y, contents) {
            $("<div id='graph-tooltip'>" + contents + "</div>").css({top: y - 36, left: x - 19}).appendTo("body").fadeIn(200);
        };

        var previousPoint = null;
        $("#graph").on("plothover", function (event, pos, item) {

            if (item) {
                if (previousPoint != item.dataIndex) {

                    previousPoint = item.dataIndex;

                    $("#graph-tooltip").remove();
                    var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);

                    showTooltip(item.pageX, item.pageY, '$' + y*100);
                }
            } else {
                $("#graph-tooltip").remove();
                previousPoint = null;
            }
        });
    });
</script>

</body>
</html>
