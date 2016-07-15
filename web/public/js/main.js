var cadena=null;
var Risk="";
var Danger="";
var Icono=""; 
var estilo=""; 
var pathJSON="ScriptFrontEnd/Screen2/"; 
var nodo=null;
var pushLeft=null; 
var pushRight=null; 
var session=null; 
//leerdatos();

  
$(document).ready(function(){
    
    
    session=0;
    
    LoadNav(1);
    /*if(session==1)
    {
        LoadNav(1);
    }
    else
    {
        LoadLogin();
    }*/
    

    
$("footer").html('Copyright &copy; Waposat 2016');

});



function leerdatos(){
$.getJSON('ScriptFrontEnd/Screen1/MonitorBlock.php',$('#formulario').serialize(), function(data) {
  cadena='';
  $("#puntos").html(data.MonitorPoint.length);
  $.each(data.MonitorPoint, function(key, val) {
  Risk='';
  Danger='';
  Icono=''; 
  estilo=''; 
      if(val.NumRisk>0)
      {Risk='<div  class=InfoRisk>' + val.NumRisk +'</div>';}
      if(val.NumDanger>0)
      {Danger='<div  class=InfoDanger>' + val.NumDanger +'</div>';}
      
      if(val.NumDanger==0 && val.NumRisk==0 )
      {Icono=''; 
      estilo='PanelHeadStable';}
      else if(val.NumDanger==0 && val.NumRisk>0)
      { Icono='<i class="fa fa-exclamation-circle" aria-hidden="true"></i>';
        estilo='PanelHeadRisk';}
      else
      {Icono='<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>';
      estilo='PanelHeadDanger';}
     
   cadena+='<div class="box"><div class="Panel"><div class='+estilo+'><table class=TablaPanel><tr><td class=PanelAlerta>'+Icono+'</td><td class=PanelTitulo onclick="ShowPoint('+ val.Id +')">'+ val.Name +'<br>' + val.CodeName +'</td><td align=right width="30%">'+ Danger + Risk +'</td></tr></table></div><div class=PanelBody>';
   
      $.each(data.MonitorPoint[key].Parameter, function(k, v) {
    cadena+='<div class=PanelDetalle><span>' + v.Code +': </span><span> ' + v.LastValue +'</span></div>';
   });
   
   cadena+='</div></div></div>';
  });

});

return cadena;
}

function BlockDetail(id)
{
    
 $.getJSON('ScriptFrontEnd/Screen1/MonitorPoint.php',{'id':id}, function(data) {
 var items = [];
 
 items.push('<div class="DetailHead" onclick=pushRight.close()><i class="fa fa-arrow-right" aria-hidden="true"></i> Parametros Totales</div>\n\
            <div class=Detail><span>'+data.Name+'<br>'+data.CodeName+'</span>\n\
            <table class="tablainformativa" align="center">');
 items.push('<tr><th>Parámetro</th><th>Min</th><th>Max</th><th>Actual</th></tr>');
   var stylo='';
   
   $.each(data.Parameter, function(key, val) {
   stylo=' class="Stable"';
    if(val.LastValue>=val.LMR && val.LastValue<=val.LMP)
   {
   stylo=' class="Risk"';
   }else if(val.LastValue>val.LMP)
   {
    stylo=' class="Danger"';
   }  
   
    items.push('<tr><td>' + val.Name +'</td><td>' + val.MinValue +'</td><td>' + val.MaxValue +'</td><td '+ stylo +'><span '+stylo+'>' + val.LastValue +'</span></td></tr>');
});


 items.push('</table> <a href=javascript:pushRight.close() class=ButtonBack>Volver</a></div>');

 $(nodo1).html(items.join(''));

});
 
}

function ShowBlock()
{
$("section").html('<div class=Block><div class=filtros><form id="formulario">Puntos de Monitorea (<span id="puntos"></span>) <label><input type="checkbox" name="critico" checked=checked onclick="leerdatos()" value=1> Critico</label> <label><input type="checkbox" name="alerta" onclick="leerdatos()"  checked=checked value=1> Alerta</label><label><input type="checkbox" name="estable" value=1 checked=checked onclick="leerdatos()"> Estable</label></form></div><div id=main class="boxcols"></div></div><div class=DetailBlock></div>');
$("#main").html(leerdatos());  
calBoxCol();
}
function ShowPoint()
{

$.getJSON('ScriptFrontEnd/Screen1/MonitorPoint.php',function(data){
  
      if(data.NumDanger==0 && data.NumRisk==0 )
      {Icono=''; 
      estilo='PanelHeadStable';}
      else if(data.NumDanger==0 && data.NumRisk>0)
      { Icono='<i class="fa fa-exclamation-circle" aria-hidden="true"></i>';
        estilo='PanelHeadRisk';}
      else
      {Icono='<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>';
      estilo='PanelHeadDanger';}
  
$(".DetailBlock").html("<table class=TablaPoint border=0><tr><td><div class="+estilo+"><div Class=PanelAlerta>"+ Icono +"</div> "+data.Name+"<br>"+data.CodeName+"<div class='MenuRight' onclick='BlockDetail(1);pushRight.open()'><i class='fa fa-bars' aria-hidden='true'></i></div></div></td></tr><tr><td> <div id=ChartGauge class=Group></div></div></td></tr><tr><td align=center><table><tr><td><div id=ChartTittle></div></td></tr><tr><td><div id=ChartLines></div></td></tr><tr><td><div id=ChartDetail  class='DetailChart Black'></div> <td></tr></table></td></tr></table>");
var n;   
    
    $.each(data.Parameter,function(k,v){
     $("#ChartGauge").append('<div class=ItemBox><div id=chart'+k+' class=grafico></div></div>');  
     n=((v.LastValue*100)/v.MP);
     drawChart('chart'+k,v.Code,Math.round(n * 100) / 100,v.LMP*100/v.MP,100,v.LMR*100/v.MP,v.LMP*100/v.MP);
     $('#chart'+k).append("<label>"+v.Name+"</label>");
    });
    
$(".DetailBlock").css("width","50%");
$(".Block").css("width","50%");
calBoxCol();
ResizeCol();
    
});



$.getJSON('ScriptFrontEnd/Screen1/ParameterData.php',function(data){
    
var datos="[";  

$("#ChartTittle").html(data.Name+"<br>mg/L vs Tiempo");
$("#ChartDetail").html('<table><tr><td>Minimo:</td><td><label>'+data['MinValue']+ '</label></td></tr><tr><td>Medio:</td><td><label>'+data['MeanValue'] +'</label></td></tr><tr><td>Maximo:</td><td><label>'+data['MaxValue'] +'</label></td></tr></table>');

for(a=0;a<=data.Data.Time.length-1;a++)
    {
var d = new Date("1 1, 2016 "+data.Data.Time[a]);
datos+="[["+ d.getHours() +","+ d.getMinutes() +",0],"+ data.Data.Value[a]+","+data.LMP+","+data.LMR+"],";
    }
datos=datos.substr(0,datos.length-1)+"]";  

drawCurveTypes('ChartLines',330,200,datos,data.Name);
    
});


}

function LoadNav(type = 1)
{

 $.post("/dashboard",$("#formulario").serialize(), function(response) {
     
   var data= jQuery.parseJSON(response);
   
   if(data.HiUser=="")
   {
       $("#respuesta").html("El usuario o la contraseña son incorrectos");
       return;
   } 
  

 nodo=document.getElementsByTagName("aside")[0];
 pushLeft = new Menu({type: 'push-left', menuOpenerClass: '.menuleft',Menu:nodo});
 
 nodo1=document.getElementsByTagName("aside")[1];
 pushRight = new Menu({type: 'push-right', menuOpenerClass: '.menuright',Menu:nodo1});
 
    var items = [];
   $("section").css("background-color","#ffffff"); 
   $("header").html('<a class="icon" onclick="pushLeft.open()"><i class="fa fa-bars" aria-hidden="true"></i></a>\n\
                     <div class=logo><img src="public/img/waposat-logo-flat.png" class=LogoToolBar></div>\n\
                     <div class=user>'+data.HiUser+'</div>\n\
                     <a class="icon-close" id=Close><i class="fa fa-power-off" aria-hidden="true"></i></a>\n\
                     <div class="BoxAlert"><i class="fa fa-bell" aria-hidden="true" style="float:left"></i> <span class="InfoDanger InfoLittle ">'+data.NumDanger+'</span><span class="InfoRisk InfoLittle ">'+ data.NumRisk+'</span></div>\n\
                     <div class="Export" onclick="Export()"><i class="fa fa-share-square-o" aria-hidden="true"></i> Exportar</div>\n\
                     ');
if(type==1)
{     
   items.push('<div id="bloques" onclick=pushLeft.close()>BLOQUES <i class="fa fa-arrow-right" aria-hidden="true"></i></div>');
     
  $.each(data.ProcessBlock, function(key, val) {
    items.push('<a id=\'link' + val.Id +'\' >' + val.Name +'<br />' + val.CodeName +'</a>');
   });
   
 $('<nav/>', {'class': 'menu', html: items.join('')}).appendTo(nodo);
    
    
  


$('#link1').click(function(){
pushLeft.close();
 ShowPoint();
});

$('#Close').click(function(){
CloseSession();
});

$("#link2").click(function(){
pushLeft.close();
 ShowBlock();
});

ShowAlert();
ShowBlock();
}
else if(type==2)
{
ShowPlain(); 
ShowAlert();
}

 
});



 //launchFullscreen(); 
 
}

function CloseSession()
{
if (confirm("Close Window?")) {
  $.get("php/close.php",function(data){});
      location.reload();

    }    
    
}


function ShowAlert()
{
    
$.getJSON(pathJSON+"AlertData",function(data){
var items=[];
items.push('<div class=BoxMessage><ul class="Message">');
    $.each(data,function(k,v){
         extra='';
      if(v.AlertType==0)
      {extra=' InfoRisk ';
      estilomensaje=' class=MessageRisk ';}
      else
      {extra=' InfoDanger ';
      estilomensaje=' class=MessageDanger ';}
      
      items.push('<li onclick="ShowDetail('+ v.IdMonitorBlock +')" '+estilomensaje+'><div class="'+extra+' InfoLittlePoint InfoList"> </div> ' +v.Message+'</li>');
    });
items.push('</ul></div>');

$('.BoxAlert').tooltipster({
   animation: 'fade',
   delay: 200,
   interactive:true,
   content: items.join(''),
   contentAsHTML: true,
   theme: 'Light',
   trigger: 'click'
});
});

}

google.charts.load('current', {'packages':['gauge','corechart', 'line']});    

function drawChart(id,l,v,dangerini,dangerfin,riskini,riskfin) {

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          [l, v]
        ]);

        var options = {
          redFrom:dangerini, redTo: dangerfin,
          yellowFrom:riskini, yellowTo: riskfin,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById(id));

        chart.draw(data, options);

      }
      

function drawCurveTypes(id,w,h,datos,titulo) {
 

 
var data1 = new google.visualization.DataTable();
      data1.addColumn('timeofday', 'X');
      data1.addColumn('number', titulo);
      data1.addColumn('number', 'Risk');
      data1.addColumn('number', 'Danger');

data1.addRows(JSON.parse(datos));

  var options = {chart: {
          title: titulo,
          subtitle: 'mg/L vs Tiempo'
        },
         width: w,
        height: h,
        chartArea: {'right':20,'width': '80%', 'height': '75%'},
        legend: {position: 'none'},
        hAxis: {gridlines: {count: 5}},
        vAxis: {viewWindow: { min:0}},
        colors: ['#256088', '#efa331', '#a73836']};
      
var chart = new google.visualization.LineChart(document.getElementById(id));
chart.draw(data1, options);




      
    }
    
function Export()
    {
        
      $("section").html("");  
    }
    

function ShowPlain()
    {
      var items = [];
 
     var puntos="";
     var extra="";
     items.push('<div id="owl-demo" class="owl-carousel owl-theme">');
     
        $.getJSON("ScriptFrontEnd/Screen2/MonitorBlock.php",function(data){
            $.each(data.MonitorPoint,function(key,value){

  puntos="<div style='height:120px'><table align=center>";
  $.each(value.Parameter,function(k,v){
      extra=' InfoStable';
      if(v.LastValue>=v.LMR && v.LastValue < v.LMP)
      {extra=' InfoRisk ';}
      if(v.LastValue>=v.LMP)
      {extra=' InfoDanger ';}
      
     puntos+='<tr onclick=ShowDetail('+v.Id+')><td><div class="' + extra + ' InfoLittlePoint"> </div></td><td align=left>'+ v.Code+'</td><td align=left>: '+v.LastValue+'</td></tr>'; 
  });
  puntos+="</table></div>"
  
             items.push('<div class="item"><div class=PlainBox>'+ value.CodeName +'</div><br>'+ puntos+'<br>'+ value.Name +'<br><div style="background-image:url('+pathJSON+value.URL +'); background-position:top center;height:250px"></img src="ScriptFrontEnd/Screen2/'+value.URL +'"></div></div>');
 });
           
     items.push('</div><a class="btn prev"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>  <a class="btn next"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>');
           
   $("section").html(items.join(''));   
           
        
  var owl = $("#owl-demo");
   owl.owlCarousel({ items : 6});
 $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })    
            
            
        });
        
    }
    
  function ShowDetail(id)
  {
  var n;
   $('.BoxAlert').tooltipster('close');
   
  
   $(nodo1).html('<div class="DetailParameter"></div>');
   $(".DetailParameter").append('<div class="DetailHead"><i class="fa fa-arrow-right" aria-hidden="true"></i> Detalles del Parametro</div>');
   
   $.ajax({
       url:pathJSON+'ParameterData.php',
       type:'GET',
       dataType: 'json',
       success:function(data){
           $(".DetailParameter").append('<div class="DetailAlert"><div class=PanelAlerta><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></div>'+data['Name']+ '</div>');
           $(".DetailParameter").append('<table align=center border=0 ><tr><td align=center><div id=Chart></div></td><td rowspan=2  align=center><div class="DetailValue"><table><tr><td>Minimo:</td><td><label>'+data['MinValue']+ '</label></td></tr><tr><td>Medio:</td><td><label>'+data['MeanValue'] +'</label></td></tr><tr><td>Maximo:</td><td><label>'+data['MaxValue'] +'</label></td></tr></table></div></td></tr><tr><td><div class="DetailChart"></div></td></tr><tr><td colspan=2 align=center> <label class=DetailLabel>Limites máximos establecidos por la OMS</label></td></tr><tr><td colspan=2><div id=ChartLines>000</div></td></tr><tr><td><select name=long><option value="20">20 puntos</option><option value="10">10 puntos</option></select> <label> 5 - 7.5</label> <i class="fa fa-cog" aria-hidden="true"></i></td></tr></table>');
           
            n=((data['Last']['Value']*100)/data['MP']);
            drawChart('Chart',data['Code'],Math.round(n * 100) / 100,data['LMP']*100/data['MP'],100,data['LMR']*100/data['MP'],data['LMP']*100/data['MP']);
            $(".DetailChart").html('Medida Actual:<br><label>'+data['Last']['Value']+'</label>');
            
           

var datos="[";  
for(a=0;a<=data.Data.Time.length-1;a++)
    {
var d = new Date("1 1, 2016 "+data.Data.Time[a]);
datos+="[["+ d.getHours() +","+ d.getMinutes() +",0],"+ data.Data.Value[a]+","+data.LMP+","+data.LMR+"],";
    }
datos=datos.substr(0,datos.length-1)+"]";  
           
drawCurveTypes("ChartLines",275,180,datos,data['Name']);

pushRight.open();
           
       },
       complete:function(data){
        
       },
       error:function(){}
       
   });
   
   

  }
  
  
  
  function calBoxCol(){
	var contentWidth = $('.boxcols').width();
	var boxCols = 0;
        var boxwidth=null;
	
       if (contentWidth > 1900){
		boxCols = 7;
		boxwidth = Math.floor(contentWidth / boxCols) * 0.99;
	} else if (contentWidth < 1900 && contentWidth > 1400 ) {
		boxCols = 6;
		boxwidth = Math.floor(contentWidth / boxCols) * 0.99;
	} else if (contentWidth < 1400 && contentWidth > 1000 ){
		boxCols = 5;
		boxwidth = '20%';
	} else if (contentWidth < 1000 && contentWidth > 800 ){
		boxCols = 4;
		boxwidth = '25%';
	} else if (contentWidth < 800 && contentWidth > 640 ){
		boxCols = 3;
		var boxwidth = '33.3%';
	} else if (contentWidth < 640 && contentWidth > 480 ){
		boxCols = 2;
		boxwidth = '50%';
	} else if (contentWidth < 480){
		boxCols = 1;
		boxwidth = '100%';
	}

	$(".boxcols .box").css("width",boxwidth);
}

  function ResizeCol(){
	var contentWidth = $('.Group').width();
	var boxCols = 0;
        var boxwidth;
	
       if (contentWidth > 1400){
		boxCols = 7;
		boxwidth = Math.floor(contentWidth / boxCols) * 0.99;
	} else if (contentWidth < 1400 && contentWidth > 1200 ) {
		boxCols = 6;
		boxwidth = '16.6%';
	} else if (contentWidth < 1200 && contentWidth > 940 ){
		boxCols = 5;
		boxwidth = '20%';
	} else if (contentWidth < 940 && contentWidth > 660 ){
		boxCols = 4;
		boxwidth = '25%';
	} else if (contentWidth < 660 && contentWidth > 480 ){
		boxCols = 3;
		var boxwidth = '33.3%';
	} else if (contentWidth < 480 && contentWidth > 340 ){
		boxCols = 2;
		boxwidth = '50%';
	} else if (contentWidth < 340){
		boxCols = 1;
		boxwidth = '100%';
	}

	$(".Group .ItemBox").css("width",boxwidth);
   
}


$(window).resize(function() {
	calBoxCol();
        ResizeCol();
});


function launchFullscreen() {
    element=document.documentElement;
  if(element.requestFullscreen) {
    element.requestFullscreen();
  } else if(element.mozRequestFullScreen) {
    element.mozRequestFullScreen();
  } else if(element.webkitRequestFullscreen) {
    element.webkitRequestFullscreen();
  } else if(element.msRequestFullscreen) {
    element.msRequestFullscreen();
  }
}

function exitFullscreen() {
  if(document.exitFullscreen) {
    document.exitFullscreen();
  } else if(document.mozCancelFullScreen) {
    document.mozCancelFullScreen();
  } else if(document.webkitExitFullscreen) {
    document.webkitExitFullscreen();
  }
}

function dumpFullscreen() {
  console.log("document.fullscreenElement is: ", document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement || document.msFullscreenElement);
  console.log("document.fullscreenEnabled is: ", document.fullscreenEnabled || document.mozFullScreenEnabled || document.webkitFullscreenEnabled || document.msFullscreenEnabled);
}

// Events
document.addEventListener("fullscreenchange", function(e) {
  console.log("fullscreenchange event! ", e);
});
document.addEventListener("mozfullscreenchange", function(e) {
  console.log("mozfullscreenchange event! ", e);
});
document.addEventListener("webkitfullscreenchange", function(e) {
  console.log("webkitfullscreenchange event! ", e);
});
document.addEventListener("msfullscreenchange", function(e) {
  console.log("msfullscreenchange event! ", e);
});

function Login()
{
if($("#user").val()=="")
{
  $("#respuesta").html("Ingrese un usuario.");
   return;
}   

if($("#password").val()=="")
{
  $("#respuesta").html("Ingrese un password.");
   return;
}  
LoadNav(2);    
    
}
