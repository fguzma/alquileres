$(document).ready(function(){
   /* var tabladatos=$("#datos");
    var route="http://localhost:8080/add";
    
    $.get(route,function(res){
        $(res).each(function(key,value){
            tabladatos.append("<tr><td>"+value.Nombre+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary'>")
        });
    });*/
});

function Mostrar(btn)
{
    var route="http://127.0.0.1:8080/reservacion/"+btn.value+"/edit";
    
    var token=$("#token").val();
    $.get(route, function(res){
        $("#id").val(res.ID_Objeto);
    });
     
    $.ajax({
        url: route,
        headers:{'X-CSRF-TOKEN': token},
        type: 'GET',
        dataType: 'json',
    });  
}


$("#anadir").click(function(){
    
    var id=$("#id").val();
    var tabla=$("#articuloren");
    var cant=$("#cant").val();
    var route="http://127.0.0.1:8080/reservacion/"+id+"/edit";
    
    var token=$("#token").val();

    $.ajax({
        url: route,
        headers:{'X-CSRF-TOKEN': token},
        type: 'GET',
        dataType: 'json',
        success: function(){
            $("#Add").modal('toggle');
            agregar();
        }
    });
});
function agregar()
{
    var id=$("#id").val();
    //var fila=$("#TablaA tr").length;
    $("#contf").val(parseInt($("#contf").val())+parseInt(1));
    var fila= $("#contf").val();
    var tabla=$("#articuloren");
    var cant=$("#cant").val();
    var route="http://127.0.0.1:8080/reservacion/"+id+"/edit";
    $.get(route, function(res){
        tabla.append("<tr id=\"fila"+fila+"\"><td>"+res.Nombre+"</td><td>"+cant+"</td><td>"+res.Costo_Alquiler+"</td><td> "+(cant*res.Costo_Alquiler)+"</td><td><button value="+fila+" OnClick='Eliminar(this);' class='btn btn-danger'>Eliminar</button></td></tr>")
    });
}
$(".reser").click(function(){
    $("#cant").val("");
});

function Eliminar(btn)
{  
        $("#fila"+btn.value).remove();
       // document.getElementById("tableid").deleteRow(i);
}
function Enviar()
{
    var f = new Date();
    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
    var cantc=1;
    var pago=0;
    var lce=$("#lce").text($("#Cedu").val());
    var lnom=$("#lnom").text($("#Nom").val());
    var ldir=$("#ldir").text($("#Dir").val());
    var lfi=$("#lfi").text($("#datepicker").val());
    var lff=$("#lff").text($("#datepicker2").val());
    var lf=$("#lf").text("Fecha: "+f.getDate() + " de " + (meses[f.getMonth()]) + " de " + f.getFullYear());
    var pos=0;
    var A=new Array();
    $("#artifin").empty();
//TABLA DE ARTICULOS SOLICITADOS
        $("#artifin").append("<tr>");
        $("#articuloren tr td").each(function(){
            if($(this).text()!="Eliminar")
            {
                $("#artifin").append("<td>"+ $(this).text()+ "</td>");
                A[pos]=$(this).text();
                pos++;
            }
            cantc++;
            if(cantc>$("#TablaA th").length)
            {
                pago+=parseInt($(this).text());
                $("#artifin").append("</tr><tr>");
                cantc=0;
            }
        });
        A[pos]=pago;
        A[pos+1]=pago*0.15;
        A[pos+2]=pago+(pago*0.15);
        A[pos+3]="Fecha: "+f.getDate() + " de " + (meses[f.getMonth()]) + " de " + f.getFullYear();
        $("#arre").val(A);
        console.log($("#arre").val());

        $("#artifin").append("</tr>"+
                             "<tr><td> </td><td> </td><td><b>Sub Total:</b></td><td>"+pago+"</td></tr>"+
                             "<tr><td> </td><td> </td><td><b>IVA:</b></td><td>"+(pago*0.15)+"</td></tr>"+
                             "<tr><td> </td><td> </td><td><b>Gran Total:</b></td><td>"+(pago+(pago*0.15))+"</td></tr>");

    CambioPag();
    
/*$("#tablaB").submit();
console.log(lf);
    $("#F").text(lf);
    $("#NC").text(lnom);
    $("#D").text(ldir);
    $("#FI").text(lfi);
    $("#FF").text(lff);*/
}
function CambioPag()
{
    if($("#parte1").hasClass('active'))
    {
        $("#parte1").removeClass("active");
        $("#parte2").addClass("active");
    }
    else
    {
        $("#parte2").removeClass("active");
        $("#parte1").addClass("active");
    }
}

$("#impri").click(function(){

    var route="http://127.0.0.1:8080/pdf";
    
    var token=$("#token").val();

    $.ajax({
        url: route,
        headers:{'X-CSRF-TOKEN': token},
        type: 'GET',
        dataType: 'json',
    });
});
function Imprimir(btn)
{
    $("#ac").val(btn);
    if(btn=="imprimir")
        $('#formulario').attr('target','_BLANK');
    else
        $('#formulario').removeAttr('target');
}
