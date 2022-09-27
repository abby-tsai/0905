"use strict";

(function (run, $) {

    $(function () {
        var elements = {
            reportId: $('#report-id'),
        };

        var api = {
            loveStyleReport: {
                get: function (id) {
                    return $.ajax({
                        method: 'get',
                        url: '/ajax/love-style-report/' + id,
                    });
                },
            },
        };

        run($, elements, api);
    });

})(function ($, elements, api) {

    init();

    function init() {
        var reportId = elements.reportId.val();

        api.loveStyleReport.get(reportId).then(function (response) {
            var reportValue = getReportValue(response.data);
            initCanvas(reportValue);
        });
    }

    function getReportValue(data) {
        var dedicationScore = data.dedicationScore / 24 * 100;
        var possessiveScore = data.possessiveScore / 24 * 100;
        var pessimisticScore = data.pessimisticScore / 24 * 100;
        var involvedScore = data.involvedScore / 24 * 100;
        var artificeScore = data.artificeScore / 24 * 100;
        var fleshDesireScore = data.fleshDesireScore / 24 * 100;
        var marriageScore = data.marriageScore / 24 * 100;
        var romanticScore = data.romanticScore / 24 * 100;

        // 測驗報告參數 0 ~ 100
        var reportValue = [
            dedicationScore,
            possessiveScore,
            pessimisticScore,
            involvedScore,
            artificeScore,
            fleshDesireScore,
            marriageScore,
            romanticScore,
        ];

        return reportValue;
    }

    function initCanvas(reportValue) {
        /* Canvas */
        var canvas = document.getElementById("CG_star");
        var ctx = canvas.getContext("2d");
        var i,bg,
            c_w = canvas.width,
            c_h = canvas.height,
            center = c_w*0.5,
            ang = Math.PI/180,
            M_cos = Math.cos(45*ang),
            radius = c_w*0.4,
            math_X = [0,M_cos,1,M_cos,0,-M_cos,-1,-M_cos],
            math_Y = [-1,-M_cos,0,M_cos,1,M_cos,0,-M_cos],
            reVal = radius*0.01,
            bx = [], by = [], px = [], py = [];

        for (i=0; i <8; i++){
            px[i] = reportValue[i]*reVal*math_X[i], 
            py[i] = reportValue[i]*reVal*math_Y[i];
        }
        ctx.translate(center, center*1.02);
        for (i=0; i <8; i++){
            var level = 1 - i * 0.2,
                newRadius = radius * level;
            for (bg=0; bg <8; bg++){
                bx[bg] = newRadius*math_X[bg], 
                by[bg] = newRadius*math_Y[bg];
            }   
            ctx.beginPath();
            ctx.moveTo(bx[0],by[0]);
            ctx.lineTo(bx[1],by[1]);
            ctx.lineTo(bx[2],by[2]);
            ctx.lineTo(bx[3],by[3]);
            ctx.lineTo(bx[4],by[4]);
            ctx.lineTo(bx[5],by[5]);
            ctx.lineTo(bx[6],by[6]);
            ctx.lineTo(bx[7],by[7]);
            ctx.strokeStyle='#cecece';
            ctx.closePath();
            ctx.stroke();
        }
        for (i=0; i <8; i++){
            ctx.beginPath();
            ctx.moveTo(0,0);
            ctx.lineTo(radius*math_X[i],radius*math_Y[i]);
            ctx.strokeStyle='#cecece';
            ctx.stroke();
        }

        ctx.beginPath();
        ctx.moveTo(px[0],py[0]);
        ctx.lineTo(px[1],py[1]);
        ctx.lineTo(px[2],py[2]);
        ctx.lineTo(px[3],py[3]);
        ctx.lineTo(px[4],py[4]);
        ctx.lineTo(px[5],py[5]);
        ctx.lineTo(px[6],py[6]);
        ctx.lineTo(px[7],py[7]);
        ctx.strokeStyle='#85d7d1';
        ctx.lineWidth=3;
        ctx.closePath();
        ctx.stroke();

        for (i=0; i <8; i++){
            ctx.beginPath();
            ctx.arc(px[i],py[i], 5, 0, 2*Math.PI);
            ctx.fillStyle = 'black';
            ctx.fill();
        }
    }
}, jQuery);