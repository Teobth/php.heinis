<div class="bg-body-tertiary p-5 rounded">
    <h1>Employee List</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $employee): ?>
            <tr>
                <th scope="row"><?php echo $employee['EmployeeID']; ?></th>
                <td><?php echo $employee['FirstName']; ?></td>
                <td><?php echo $employee['LastName']; ?></td>
                <td><?php echo $employee['EmailAddress']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
