function getEmp() {
    let eid = document.getElementById('id').value;
    let ename = document.getElementById('name').value;
    let salaryMin = document.getElementById('salary_min').value;
    let salaryMax = document.getElementById('salary_max').value;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("result").innerHTML = this.responseText;
        }
        else
        {
            document.getElementById("result").innerHTML = this.status;
        }
    };
    xhttp.open("GET", "controller/process.php?id="+eid+"&"+"name="+ename+"&"+"salaryMin="+salaryMin+"&"+"salaryMax="+salaryMax, true);
    xhttp.send();
}