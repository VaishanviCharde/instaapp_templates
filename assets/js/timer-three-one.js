!function(e){"use strict";let $=36e5,n=24*$,t=new Date("Jun 12, 2019 00:00:00").getTime();setInterval(function(){let e=new Date().getTime(),o=t-e;document.getElementById("days").innerText=Math.floor(o/n),document.getElementById("hours").innerText=Math.floor(o%n/$),document.getElementById("minutes").innerText=Math.floor(o%$/6e4),document.getElementById("seconds").innerText=Math.floor(o%6e4/1e3)},1e3)}(jQuery);