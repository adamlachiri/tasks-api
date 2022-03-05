<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- create a group -->
    <h1>create a tasks group</h1>
    <form action="api/groups" method="post">
        @csrf
        <input type="text" name="name" placeholder="name">
        <br>
        <select name="isDaily">
            <option selected disabled>pick an option</option>
            <option value="1">Daily</option>
            <option value="0">Non daily</option>
        </select>
        <br>
        <button type="submit">store the new group</button>
    </form>

    <!-- create a task -->
    <h1>create a task</h1>
    <form action="api/tasks" method="post">
        @csrf
        <input type="text" name="text" placeholder="Enter the task text">
        <br>
        <select name="group_id">
            <option selected disabled>pick a group</option>
            @foreach(App\Models\Group::all() as $group)
            <option value="{{ $group->id }}">{{ $group->name }}</option>
            @endforeach
            <option value="9999">fake</option>
        </select>
        <br>
        <button type="submit">add the task</button>
    </form>

</body>

</html>