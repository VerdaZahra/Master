<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    th{
        background-color: #363062;
        color: white;
        text-align: center
    }
</style>
<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
</head>
<body>

<div class="container mt-5">
    <h1>User List</h1>
    <div class="row ">
        <a href= "<?php echo base_url('User'); ?>" class="btn btn-primary ml-2">User</a>
        <a href="<?php echo base_url('Menu'); ?>" class="btn btn-warning" style="margin-left: 8px;">Menu</a>
        <a href="<?php echo base_url('Orders'); ?>" class="btn btn-danger" style="margin-left: 8px;">Order</a>  
    </div>

    <form method="POST" action="<?php echo base_url('user/create_user'); ?>" class="mt-5">
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" placeholder="Input name" name="nama" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" placeholder="Input username" name="username" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="password" placeholder="Input email" name="password" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="level" class="col-sm-2 col-form-label">Level</label>
            <div class="col-sm-10">
                <select class="custom-select" id="level" name="level" required>
                    <option selected>Choose your level...</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-success ">submit</button>
    </form>

    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">username</th>
                <th scope="col">Email</th>
                <th scope="col">Level</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?php echo $user->id; ?></td>
                    <td><?php echo $user->nama; ?></td>
                    <td><?php echo $user->username; ?></td>
                    <td><?php echo $user->password; ?></td>
                    <td><?php echo $user->level; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
    <script>

         // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('c51a083519c17b4c393d', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('my-channel');
            channel.bind('my-event', function(data) {
            document.getElementById('event').innerHTML = data.message;
            // alert(data.message);
        });
    </script>

<p style="margin-left: 13em;" id="event">Waiting on event...</p>
</body>
</html>