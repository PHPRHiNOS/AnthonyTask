<!DOCTYPE html>
<html>
    <head>
        <title>PHP Task Anthony</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        $url = 'https://www.digitalartisans.com/assets/test/company_employees.json';
        $json = file_get_contents($url);
        $data = json_decode($json, true);

        $employee_list = $data['employees'];
        ?>
        <pre>
            <?php //print_r($employee_list[0]['isActive']); ?>
            <?php //print_r($employee_list[0]); ?>
        </pre>


        <h1>ABC Company</h1>
        <?php foreach ($employee_list as $employee): ?>
          <?php print_r($employee['employee_name'][0]['first_name'] . ' ' . $employee['employee_name'][0]['last_name']); ?>
          <!--For each employee where ‘isActive’ is true:-->
          <?php if (isset($employee_list[0]['isActive'])): ?>
            <ul>
                <li><?php print $employee['employee_name'][0]['first_name'] . ' ' . $employee['employee_name'][0]['last_name']; ?></li>
                <li><?php print $employee['email']; ?></li>
                <li><?php print $employee['phone']; ?></li>
                <li><?php print $employee['address']; ?></li>
                <li><?php print $employee['department'][0]['name']; ?></li>
            </ul>
          <?php endif; ?>
        <?php endforeach; ?>
    </body>
</html>