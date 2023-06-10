<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Update Project</title>

<div class="w3-padding">
    <h3>Update Project</h3>
    <form method="POST" action="/admin-dashboard/update-project/{{$edit_val -> id}}">
        @csrf
        @method('PATCH')
        <label for="descr" style="cursor:pointer;">Description:</label>
        <textarea class="w3-input w3-border" name="get_desc" style="height:90px;font-size:13.5px;" placeholder="Enter Project Description..." id="descr" required>{{$edit_val -> description}}</textarea><br/>
        <label for="project_type" style="cursor:pointer;">Choose project type:</label><br/>
        <select required name="project_type" id="project_type">
            <option value="" style="font-size:13.5px;">--select--</option>
            <option value="PHP" style="font-size:13.5px;margin-top:2px;" <?=(strcmp('PHP', $edit_val -> type) == 0) ? 'selected' : ''?>>PHP</option>
            <option value="Laravel" style="font-size:13.5px;margin-top:2px;" <?=(strcmp('Laravel', $edit_val -> type) == 0) ? 'selected' : ''?>>Laravel</option>
            <option value="Codeigniter" style="font-size:13.5px;margin-top:2px;" <?=(strcmp('Codeigniter', $edit_val -> type) == 0) ? 'selected' : ''?>>Codeigniter</option>
            <option value="Javascript" style="font-size:13.5px;margin-top:2px;" <?=(strcmp('Javascript', $edit_val -> type) == 0) ? 'selected' : ''?>>Javascript</option>
            <option value="NodeJS" style="font-size:13.5px;margin-top:2px;" <?=(strcmp('NodeJS', $edit_val -> type) == 0) ? 'selected' : ''?>>NodeJS</option>
            <option value="Python" style="font-size:13.5px;margin-top:2px;" <?=(strcmp('Python', $edit_val -> type) == 0) ? 'selected' : ''?>>Python</option>
            <option value="Flask" style="font-size:13.5px;margin-top:2px;" <?=(strcmp('Flask', $edit_val -> type) == 0) ? 'selected' : ''?>>Flask</option>
            <option value="Django" style="font-size:13.5px;margin-top:2px;" <?=(strcmp('Django', $edit_val -> type) == 0) ? 'selected' : ''?>>Django</option>
            <option value="HTML,CSS,JS" style="font-size:13.5px;margin-top:2px;" <?=(strcmp('HTML,CSS,JS', $edit_val -> type) == 0) ? 'selected' : ''?>>HTML,CSS,JS</option>
            <option value="AWS" style="font-size:13.5px;margin-top:2px;" <?=(strcmp('AWS', $edit_val -> type) == 0) ? 'selected' : ''?>>AWS</option>
            <option value="Data Analisys" style="font-size:13.5px;margin-top:2px;" <?=(strcmp('Data Analisys', $edit_val -> type) == 0) ? 'selected' : ''?>>Data Analisys</option>
            <option value="Machine Learning" style="font-size:13.5px;margin-top:2px;" <?=(strcmp('Machine Learning', $edit_val -> type) == 0) ? 'selected' : ''?>>Machine Learning</option>
            <option value="Deep Learning" style="font-size:13.5px;margin-top:2px;" <?=(strcmp('Deep Learning', $edit_val -> type) == 0) ? 'selected' : ''?>>Deep Learning</option>
            <option value="IoT" style="font-size:13.5px;margin-top:2px;" <?=(strcmp('IoT', $edit_val -> type) == 0) ? 'selected' : ''?>>IoT</option>
            <option value="SQL" style="font-size:13.5px;margin-top:2px;" <?=(strcmp('SQL', $edit_val -> type) == 0) ? 'selected' : ''?>>Database(SQL)</option>
            <option value="NoSQL" style="font-size:13.5px;margin-top:2px;" <?=(strcmp('NoSQL', $edit_val -> type) == 0) ? 'selected' : ''?>>Database(No-SQL)</option>
        </select><br/><br/>
        <input type="submit" name="submit" value="submit" class="w3-input w3-blue w3-hover-black" style="cursor:pointer;"/>
    </form>
    <a href="/admin-dashboard"><button class="w3-button w3-black w3-hover-green">Back to Dashboard</button></a>
</div>