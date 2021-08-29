<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
            * {box-sizing: border-box}

            /* Add padding to containers */
            .container {
            padding: 16px;
            }

            /* Full-width input fields */
            input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
            }

            input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
            }

            /* Overwrite default styles of hr */
            hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
            }

            /* Set a style for the submit/register button */
            .registerbtn {
            background-color: #04AA6D;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            }

            .registerbtn:hover {
            opacity:1;
            }

            /* Add a blue text color to links */
            a {
            color: dodgerblue;
            }

            /* Set a grey background color and center the text of the "sign in" section */
            .signin {
            background-color: #f1f1f1;
            text-align: center;
            }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
       <form action="action_page.php">
            <div class="container">
                <h1>Create Employee</h1>
                <hr>

                <label for="emp_id"><b>Employee Id:</b></label>
                <input type="text" placeholder="Enter Employee Id" name="emp_id" id="emp_id">

                <label for="email"><b>Employee Name:</b></label>
                <input type="text" placeholder="Enter Employee Name" name="emp_name" id="emp_name" required>


                <label for="email"><b>Email Address:</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email" required>

                <label for="phone"><b>Phone:</b></label>
                <input type="text" id="phone" name="phone" placeholder="Enter Phone Number" onkeypress="return isNumberKey(event)" maxlength="10">

                <label for="birth_date"><b>Date of Birth:</b></label>
                <input type="date" id="birth_date" name="birth_date">
                <hr>


                <label for="address"><b>Address:</b></label>
                <textarea id="address" name="address" rows="4" cols="50"></textarea>


                <br/>
                <br/>
                <label for="image"><b>Employee Image:</b></label>
                <input type="file" name="image" id="image" required>


                <p id="error_msg" style="color: red;" ></p>


                <button type="button" onclick="save()" class="registerbtn">Save</button>
            </div>
        </form>


        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>






        <script>

            window.addEventListener ?
            window.addEventListener("load",onLoad(),false) :
            window.attachEvent && window.attachEvent("onload",onLoad());

            function onLoad() {

                var today = new Date();
                var dd = today.getDate();
                var mm = today.getMonth()+1; //January is 0!
                var yyyy = today.getFullYear();
                if(dd<10){
                        dd='0'+dd
                    }
                    if(mm<10){
                        mm='0'+mm
                    }

                today = yyyy+'-'+mm+'-'+dd;
                document.getElementById("birth_date").setAttribute("max", today);

                this.getAllEmployee();
                this.removeEmployee();
            }

            function isNumberKey(evt){

                var charCode = (evt.which) ? evt.which : event.keyCode
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                    return false;
                return true;
            }

            var phone_regex = /^[0-9-+](|.\d*[0-9]|,\d*[0-9])?$/
            var email_regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;


            function ValidateData() {

                var isValidate = false;

                if (document.getElementById("emp_id").value == "") {
                    $("#emp_id").focus();
                    $("#emp_id").blur(function () {
                        var name = $('#emp_id').val();
                        if (name.length == 0) {
                            $('#emp_id').next('div.red').remove();
                            $('#emp_id').after('<div class="red" style="color:red">Employee Id is required</div>');
                        } else {
                            $(this).next('div.red').remove();
                        }
                    });
                    isValidate = true;
                }


                if (document.getElementById("emp_name").value == "") {
                    $("#emp_name").focus();
                    $("#emp_name").blur(function () {
                        var name = $('#emp_name').val();
                        if (name.length == 0) {
                            $('#emp_name').next('div.red').remove();
                            $('#emp_name').after('<div class="red" style="color:red">Employee Name is required</div>');
                        } else {
                            $(this).next('div.red').remove();
                        }
                    });
                    isValidate = true;
                }

                if (document.getElementById("birth_date").value == "") {
                    $("#birth_date").focus();
                    $("#birth_date").blur(function () {
                        var name = $('#birth_date').val();
                        if (name.length == 0) {
                            $('#birth_date').next('div.red').remove();
                            $('#birth_date').after('<div class="red" style="color:red">Date Of Birth is required</div>');
                        } else {
                            $(this).next('div.red').remove();
                        }
                    });
                    isValidate = true;
                } else {

                    var selected =  document.getElementById("birth_date").value;
                    console.log(selected);
                    var now = new Date();
                    if (selected > now) {
                        $('#birth_date').next('div.red').remove();
                        $('#birth_date').after('<div class="red" style="color:red">Date Of Birth is Invalid</div>');
                        isValidate = true;
                    }
                }


                if (document.getElementById("email").value == "") {
                    $("#email").focus();
                    $("#email").blur(function () {
                        var name = $('#email').val();
                        if (name.length == 0) {
                            $('#email').next('div.red').remove();
                            $('#email').after('<div class="red" style="color:red">Email Address is required</div>');
                        } else {
                            $(this).next('div.red').remove();
                        }
                    });
                    isValidate = true;
                } else {
                    if(!email_regex.test($('#email').val()))
                    {
                        $('#email').next('div.red').remove();
                        $('#email').after('<div class="red" style="color:red">Email is invalid</div>');
                        isValidate = true;
                    } else {
                        $('#email').next('div.red').remove();

                    }
                }

                if (document.getElementById("phone").value == "") {
                    $("#phone").focus();
                    $("#phone").focus();
                    $("#phone").blur(function ()
                    {
                        var name = $('#phone').val();
                        if (name.length == 0)
                        {
                            $('#phone').next('div.red').remove();
                            $('#phone').after('<div class="red" style="color:red">Phone number is required</div>');
                        }
                        else
                        {
                            if(!phone_regex.test( $('#phone').val()))
                            {
                                $('#phone').next('div.red').remove();
                                $('#phone').after('<div class="red" style="color:red">Phone number is invalid</div>');
                                return "false";
                            } else {
                                $(this).next('div.red').remove();
                                //return true;
                            }
                        }
                    });
                    isValidate = true;
                } else {
                    if(!phone_regex.test( $('#phone').val()))
                    {
                        $('#phone').next('div.red').remove();
                        $('#phone').after('<div class="red" style="color:red">Phone number is invalid ex: +91-XXXXXXXXXX</div>');
                        isValidate = true;
                    } else {
                        $(this).next('div.red').remove();
                    }
                }


                if (document.getElementById("address").value == "") {
                    $("#address").focus();
                    $("#address").blur(function () {
                        var name = $('#address').val();
                        if (name.length == 0) {
                            $('#address').next('div.red').remove();
                            $('#address').after('<div class="red" style="color:red">Address is required</div>');
                        } else {
                            $(this).next('div.red').remove();
                        }
                    });
                    isValidate = true;
                }


                var image = $('#image')[0].files[0];
                if (!image) {
                    $("#image").focus();
                    $("#image").focus();
                    $("#image").blur(function () {
                        var name = $('#image').val();
                        if (name.length == 0) {
                            $('#image').next('div.red').remove();
                            $('#image').after('<div class="red" style="color:red">Image is Required</div>');
                        } else {
                            $(this).next('div.red').remove();
                        }
                    });
                    isValidate = true;
                } else {
                    var fileInput = document.getElementById('image');
                    var filePath = fileInput.value;
                    var allowedExtensions = /(\.jpg|\.png)$/i;
                    if(!allowedExtensions.exec(filePath)){
                        $('#image').next('div.red').remove();
                        $('#image').after('<div class="red" style="color:red">Please select a valid image file</div>');
                        document.getElementById("image").value = '';
                        isValidate = true;
                    } else {
                        $(this).next('div.red').remove();
                    }
                }


                return isValidate;
            }


            function ClearInputField() {

                $('#emp_id').val("");
                $('#emp_name').val("");
                $('#email').val("");
                $('#phone').val("");
                $('#birth_date').val("");
                $('#address').val("");
            }





            function save() {
                $('#error_msg').text("");
                console.log(this.ValidateData());
                if(!this.ValidateData()) {

                    var form = new FormData();
                    form.append('emp_id', document.getElementById("emp_id").value);
                    form.append('emp_name', document.getElementById("emp_name").value);
                    form.append('email', document.getElementById("email").value);
                    form.append('phone', document.getElementById("phone").value);
                    var image = $('#image')[0].files[0];
                    form.append('image',image);
                    form.append('date_of_birth', document.getElementById("birth_date").value);
                    form.append('address', document.getElementById("address").value);

                    $.ajax({
                        type: 'POST',
                        url: 'api/employee/store',
                        data: form,
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            var data = response['status'];
                            console.log(response);
                            self.ClearInputField()
                            alert("User Created Successfully");
                            // if(confirm(User Created Successfully)) {

                            // }

                        },error: function (xhr){
                            console.log(xhr);

                            if(xhr['status'] == 406) {
                                var errorArray = JSON.parse(xhr['responseText']);
                                console.log(errorArray);
                                var msgStr = "";
                                $.each(errorArray, function (i, err) {
                                    $.each(err, function (title, msg) {
                                        msgStr += msg.toString() + "\n";
                                    });
                                });
                                $('#error_msg').text(msgStr);
                            }
                        },
                    });

                }
            }


            function getAllEmployee() {

                $.ajax({
                    type: 'GET',
                    url: 'api/employee',
                    data: {
                        perPage: 100,
                        name: "5435"
                    },
                    success: function (response) {
                        var data = response['status'];
                        console.log(response);
                    },error: function (xhr){
                        console.log(xhr);

                        if(xhr['status'] == 406) {
                            var errorArray = JSON.parse(xhr['responseText']);
                            console.log(errorArray);
                            var msgStr = "";
                            $.each(errorArray, function (i, err) {
                                $.each(err, function (title, msg) {
                                    msgStr += msg.toString() + "\n";
                                });
                            });
                            $('#error_msg').text(msgStr);
                        }
                    },
                });

            }


            function removeEmployee() {

                $.ajax({
                    type: 'DELETE',
                    url: 'api/employee',
                    data: {
                        id: 10
                    },
                    success: function (response) {
                        var data = response['status'];
                        console.log(response);
                    },error: function (xhr){
                        console.log(xhr);

                        if(xhr['status'] == 406) {
                            var errorArray = JSON.parse(xhr['responseText']);
                            console.log(errorArray);
                            var msgStr = "";
                            $.each(errorArray, function (i, err) {
                                $.each(err, function (title, msg) {
                                    msgStr += msg.toString() + "\n";
                                });
                            });
                            $('#error_msg').text(msgStr);
                        }
                    },
                });

            }



        </script>

    </body>


</html>
