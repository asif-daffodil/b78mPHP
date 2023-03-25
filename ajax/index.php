<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Bootstrap</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
</head>

<body>
    
    <div class="container">
        <div class="row min-vh-100">
            <div class="col-md-5 m-auto p-4 border shadow">
                <h2 class="mb-3">Login Form</h2>
                <form action="" id="myForm">
                    <div class="mb-3">
                        <input type="text" placeholder="Your Name" name="yname" class="form-control" id="yname">
                    </div>
                </form>
                <div id="showName"></div>
            </div>
        </div>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js'></script>
    <script>
        $("#myForm").submit((e)=>{
            e.preventDefault();
            $("#showName").text($("#yname").val());
        })

        $("#yname").keyup(()=>{
            let data = $("#yname").val();
            $.ajax({
                url: "background.php",
                method: "post",
                data: {data: data},
                success: (d) => {
                    $("#showName").text(d);
                }
            })
        })
    </script>

    <script>
        /* 
        Coder Yousuf
        const myForm = document.getElementById("myForm");
        const showName = document.getElementById("showName");
        
        myForm.addEventListener("submit", (e)=>{
            e.preventDefault();
            const yname = document.getElementById("yname");
            showName.textContent = yname.value;
        }) 
        */
    </script>
</body>

</html>