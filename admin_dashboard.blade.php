<html>
    <head>
        <title>Dashboard</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="description" content="Admin Dashboard">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style type="text/css">
            table{width:1050px;}
            table,th,td{border:1px solid #1f1f1f;}
            th{font-size:14px;}
            th,td{padding:5px 5px;}
            td{
                font-size:12px; 
                line-height:1.4em;
                text-align:center;
            }
            #show-upload{display:none;}
            /* .not-found,#not-found{column-span: all;} */
            @media only screen and (max-width: 650px){
                table{width:640px;}
            }
        </style>
    </head>
    <body>
        <div class="w3-padding">
            <a href="/logout"><button class="w3-button w3-red w3-hover-yellow"><i class="fa fa-power-off" style="font-size:20px;color:white;"></i> Logout</button></a>
            <button class="w3-button w3-blue w3-hover-black" id="upload">Upload Files</button>
            <button class="w3-button w3-green w3-hover-black" id="dashboard">Dashboard</button>
            <div id="display-data" class="w3-margin-top">
                <div id='show-dashboard'>
                    <h3>Dashboard</h3>
                    <hr style="width:30%; height:1px; background:#000000;"/>
                    @if(session() -> has('success'))
                        <div class = 'w3-card-2 w3-padding w3-red' id="del-container">
                            <span style="font-weight:bold; font-size:35px; cursor:pointer; float:right;" onclick="document.getElementById('del-container').style.display='none';">&times;</span>
                            <h4 class = 'w3-center w3-text-white'>{{ session() -> get('success') }}</h4>
                        </div>    
                    @endif
                    <div class='w3-padding'>
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>File</th>
                                <th>Send at</th>
                                <th>View</th>
                                <th>Download</th>
                                <th>Delete</th>
                            </tr>
                            
                            @if(count($fetch_val) > 0)
                                @foreach ($fetch_val as $result)

                            <tr>
                                <td>{{$result->name}}</td>
                                <td>{{$result->email}}</td>
                                <td>{{$result->message}}</td>
                                @if($result->file == 'NULL')
                                <td>NULL</td>
                                @else
                                <td><img src="./portfolio-files/photos/free-file-icon-1453-thumb.png" class='user-file' title="file" style="width:80px;height:80px;"/></td>
                                @endif
                                <td>{{$result->time_send}}</td>
                                @if($result->file == 'NULL')
                                <td>-------</td>
                                @else
                                <td><a href="./portfolio-files/upload_file/{{$result->file}}"><button class="w3-button w3-blue w3-hover-black" style="font-size:12px;"><i class="fa fa-eye"></i> View</button></a></td>
                                @endif
                                @if($result->file == 'NULL')
                                <td>-------</td>
                                @else
                                <td><a href="./portfolio-files/upload_file/{{$result->file}}" download><button class="w3-button w3-green w3-hover-aqua" style="font-size:12px;"><i class="fa fa-download"></i> Download</button></a></td>
                                @endif
                                <td>
                                    <form method = 'POST' action = '/admin-dashboard/delete/{{ $result -> id }}'>
                                        @csrf
                                        @method('DELETE')
                                        <button class = "w3-red w3-hover-yellow w3-button" style="font-size:12px; margin-top:12px;"><i class="fa fa-trash-o"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>

                                @endforeach
                            @else

                            <tr>
                                <td id="not-found" class="w3-text-red w3-padding" colspan="8" style="font-size:17px;">No Record Found!</td>
                            </tr>

                            @endif

                        </table>
                    </div>
                </div>
                <div id='show-upload'>
                    <h3>Upload Files</h3>
                    <div class='w3-padding' style="width:100%; box-shadow:0px 3px 3px #777777; border-radius:3px;">
                        <form method="POST" action="/upload-project" enctype="multipart/form-data">
                            @csrf
                            <label for="descr" style="cursor:pointer;">Description:</label>
                            <textarea class="w3-input w3-border" name="get_desc" style="height:90px;font-size:13.5px;" placeholder="Enter Project Description..." id="descr" required></textarea><br/>
                            <label for="project_type" style="cursor:pointer;">Choose project type:</label><br/>
                            <select required name="project_type" id="project_type">
                                <option value="" style="font-size:13.5px;">--select--</option>
                                <option value="PHP" style="font-size:13.5px;margin-top:2px;">PHP</option>
                                <option value="Laravel" style="font-size:13.5px;margin-top:2px;">Laravel</option>
                                <option value="Codeigniter" style="font-size:13.5px;margin-top:2px;">Codeigniter</option>
                                <option value="Javascript" style="font-size:13.5px;margin-top:2px;">Javascript</option>
                                <option value="NodeJS" style="font-size:13.5px;margin-top:2px;">NodeJS</option>
                                <option value="Python" style="font-size:13.5px;margin-top:2px;">Python</option>
                                <option value="Flask" style="font-size:13.5px;margin-top:2px;">Flask</option>
                                <option value="Django" style="font-size:13.5px;margin-top:2px;">Django</option>
                                <option value="HTML,CSS,JS" style="font-size:13.5px;margin-top:2px;">HTML,CSS,JS</option>
                                <option value="AWS" style="font-size:13.5px;margin-top:2px;">AWS</option>
                                <option value="Data Analisys" style="font-size:13.5px;margin-top:2px;">Data Analisys</option>
                                <option value="Machine Learning" style="font-size:13.5px;margin-top:2px;">Machine Learning</option>
                                <option value="Deep Learning" style="font-size:13.5px;margin-top:2px;">Deep Learning</option>
                                <option value="IoT" style="font-size:13.5px;margin-top:2px;">IoT</option>
                                <option value="SQL" style="font-size:13.5px;margin-top:2px;">Database(SQL)</option>
                                <option value="NoSQL" style="font-size:13.5px;margin-top:2px;">Database(No-SQL)</option>
                            </select>
                            <br/><br/>
                            <label for="upload-file" style="cursor:pointer;">Upload file:</label>
                            <input type="file" name="upload_file" id="upload-file" required class="w3-input"/>
                            <input type="submit" name="submit" value="submit" class="w3-input w3-blue w3-hover-black" style="cursor:pointer;"/>
                        </form>
                    </div>
                    <div class="w3-padding w3-margin-top">
                        <h3>Uploaded Projects</h3>
                        <table>
                            <tr>
                                <th>Type</th>
                                <th>Description</th>
                                <th>Time</th>
                                <th>Download</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            @if(count($fetch_val_project) > 0)
                                @foreach($fetch_val_project as $result)

                            <tr>
                                <td>{{$result->type}}</td>
                                <td>{{$result->description}}</td>
                                <td>{{$result->time}}</td>
                                <td><a href="./portfolio-files/upload-project/{{$result->file}}" download><button class="w3-button w3-green w3-hover-black" style="font-size:12px;"><i class="fa fa-download"></i> Download</button></a></td>
                                <td><a href = "/admin-dashboard/edit/{{$result->id}}" style = "text-decoration: none;"><button class="w3-button w3-green w3-hover-aqua" style="font-size:12px;">Edit</button></a></td>
                                <td>
                                    <form method = 'POST' action = '/admin-dashboard/delete-project/{{ $result -> id }}'>
                                        @csrf
                                        @method('DELETE')
                                        <button class = "w3-red w3-hover-yellow w3-button" style="font-size:12px; margin-top:12px;"><i class="fa fa-trash-o"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>

                                @endforeach
                            @else

                            <tr>
                                <td class="w3-text-red not-found" colspan="6" style="font-size:17px;">No Project Found!</td>
                            </tr>

                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.getElementById('upload').addEventListener('click',()=>{
                document.getElementById('show-dashboard').style.display = 'none';
                document.getElementById('show-upload').style.display = 'block';
            });
            document.getElementById('dashboard').addEventListener('click',()=>{
                document.getElementById('show-dashboard').style.display = 'block';
                document.getElementById('show-upload').style.display = 'none';
            });
        </script>
    </body>
</html>