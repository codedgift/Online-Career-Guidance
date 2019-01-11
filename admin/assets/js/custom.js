var baseURL = location.protocol + "//" + location.hostname + (location.port && ":" + location.port) + "/project/admin";


var before="Christmas!"
var current="Today is Christmas. Merry Christmas!"
var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec")

function countdown(yr,m,d){
    
        theyear=yr;themonth=m;theday=d
        var today=new Date()
        var todayy=today.getYear()
        if (todayy < 1000)
        todayy+=1900
        var todaym=today.getMonth()
        var todayd=today.getDate()
        var todayh=today.getHours()
        var todaymin=today.getMinutes()
        var todaysec=today.getSeconds()
        var todaystring=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec
        futurestring=montharray[m-1]+" "+d+", "+yr
        dd=Date.parse(futurestring)-Date.parse(todaystring)
        dday=Math.floor(dd/(60*60*1000*24)*1)
        dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1)
        dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1)
        dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1)
        if(dday==0&&dhour==0&&dmin==0&&dsec==1){
        document.forms.count.count2.value=current
        return
        }
        else
        $('#showTimer').html("Class starts in "+dday+ " days, "+dhour+" hours, "+dmin+" minutes, and "+dsec+" Secs");
        //document.getElementById("").innerHTML=
        //document.forms.count.count2.value="Only "+dday+ " days, "+dhour+" hours, "+dmin+" minutes, and "+dsec+" seconds left until "+before
        setTimeout("countdown(theyear,themonth,theday)",1000)
    

}


function delete_cat(s)
{
    if (confirm('Click OK if you really want to remove this category')) {
        document.location.href = baseURL + '/pages/delete_cat/' + s;
    }
}


function delete_my_class(s, m)
{
    if (confirm('Click OK if you really want to delete ' + m + ' class')) {
        document.location.href = baseURL + '/users/delete_my_class/' + s;
    }
}

function delete_serv(s)
{
    if (confirm('Click OK if you really want to delete this service')) {
        document.location.href = baseURL + '/pages/del_serv/' + s;
    }
}

function post_del(s)
{
    if (confirm('Click OK if you really want to delete this Article?')) {
        document.location.href = baseURL + '/pages/post_delete/' + s;
    }
}

function delete_art(s)
{
    if (confirm('Click OK if you really want to delete this Article')) {
        document.location.href = baseURL + '/pages/del_art/' + s;
    }
}


function delete_team(s)
{
    if (confirm('Click OK if you really want to delete this member')) {
        document.location.href = baseURL + '/pages/del_team/' + s;
    }
}

function delete_port(s)
{
    if (confirm('Click OK if you really want to delete this portfolio')) {
        document.location.href = baseURL + '/pages/del_port/' + s;
    }
}

function del_career(s)
{
    if (confirm('Click OK if you really want to delete this category')) {
        document.location.href = baseURL + '/pages/del_car/' + s;
    }
}


function delete_counsellor(s)
{
    if (confirm('Click OK if you really want to delete this counsellor?')) {
        document.location.href = baseURL + '/pages/del_counsellor/' + s;
    }
}





function add_course()
{
    var course = $("#ddlCourse").val();
    if (course != "")
    {
        if (course === "no")
        {
            alert('Sorry, you cant add this Course. It already exists in your Course list');
        } else {
            if (confirm('Click OK if you really want to add this course to the courses you teach')) {
                document.location.href = baseURL + '/teacher/add_course/' + course;
            }
        }
    }

}

function centers()
{
    var center = $("#ddlCenter").val();
    if (center != "")
    {
        if (center === "My House")
        {
            $('#shwCenter').html('Your House Address:<textarea class="form-control" name="txtHouse" rows="4" style="height:70px;"></textarea>');
        }else if(center === "LNN Center")
        {
            $('#shwCenter').html('LearnNowNow Centers: <div class="styled-select"><select name="ddlLNNCenters" class="form-control"><option>Lagos Mainland </option><option>Lagos Island</option></select></div>');
        } else {
            $('#shwCenter').html('Online Type: <div class="styled-select"><select name="ddlOnline" class="form-control"><option>Live Class</option><option>Recorded Class</option></select></div>');
        }
    }
}

function centers2()
{
    var center = $("#ddlCenter").val();
    if (center != "")
    {
        if(center === "LearnNowNow Center")
        {
            $('#shwCenter').html('LearnNowNow Centers: <div class="styled-select"><select name="ddlLNNCenters" id="ddlLNNCenters" onchange="showCenter2()" class="form-control"><option>Lagos Mainland </option><option>Lagos Island</option></select></div>');
        } else if(center === "Online") {
            $('#shwCenter').html('Online Type: <div class="styled-select"><select name="ddlOnline" id="ddlOnline" class="form-control" onchange="showCenter3()"><option>Live Classroom</option><option>Recorded Classroom</option></select></div>');
        }
    }
}

function payment()
{
    var center = $("#ddlPay").val();
    if (center != "")
    {
        if (center === "Bank")
        {
            document.getElementById("online").style.display = "none";
            document.getElementById("bank").style.display = "block";
        }else if(center === "Online")
        {
            document.getElementById("bank").style.display = "none";
            document.getElementById("online").style.display = "table-row";
        }
    }
}

function cal_payment(fee)
{
    var months = $("#ddlMonth").val();
    var amount = fee * months;
    $("#txtFee").val(amount);
}

function showCourse()
{
    var course = document.getElementById("ddlCourse").options[ddlCourse.selectedIndex].text;
    var state = $("#hdState").val();
    $('#shwCourse').html(course+" in "+state+" State");
}

function showCenter()
{
    var center = $("#ddlCenter").val();
    if(center === "LearnNowNow Center")
    {
        $('#shwCenter2').html(" at "+center);
        $('#shwCenter3').html(" (Lagos Mainland)");
    }else if(center === "Online"){
        $('#shwCenter2').html(" Via "+center+" Training");
        $('#shwCenter3').html(" (Live Classroom) ");
    }else{
        $('#shwCenter2').html(" at "+center);
        $('#shwCenter3').html("");
    }
    
}

function showCenter2()
{
    var center = $("#ddlLNNCenters").val();
    $('#shwCenter3').html(" ("+center+")");
}

function showCenter3()
{
    var center = $("#ddlOnline").val();
    $('#shwCenter3').html(" ("+center+")");
}


function showDuration()
{
    var dur = $("#txtDuration").val();
    var dur2 = $("#ddlDuration").val();
    $('#shwDuration').html(" for "+dur+" "+dur2);
}

function openNew()
{
    window.open("http://learnnownow.com", "_blank", "toolbar=yes, scrollbars=yes, resizable=yes, top=500, left=500, width=600, height=600");
}


$(document).ready(function(){
    $("#register_div").hide();
    $("#lnkRegEmail").click(function(){
        $("#register_div").toggle();
    });
    
});