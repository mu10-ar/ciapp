<!-- CaseStudy  View -->
<div style="text-align: center; margin:  4px;">
    <h1>CaseStudy List</h1>
</div>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Patient Id</th>
                <th scope="col">case study id</th>
                <th scope="col">patient name</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            <?php
            
            $id=1;
            foreach($casestudy as $casestudy){?>
            <tr>
                <th scope="row"><?=$id?></th>
                <td><?=$casestudy['id']?></td>
                <td><?=$casestudy['case_study_id']?></td>
                <td><?=$casestudy['firstname'].' '.$casestudy['lastname']?></td>
                <td> <a href="<?=base_url()?>/editcasestudy/<?=$casestudy['case_study_id']?>"
                        class="btn btn-primary btn-sm">Edit</a>
                    <a href="<?=base_url()?>/deletecasestudy/<?=$casestudy['case_study_id']?>"
                        class="btn btn-danger btn-sm">Delete</a>
                    <a href="<?=base_url()?>/viewcasestudy/<?=$casestudy['case_study_id']?>"
                        class="btn btn-warning btn-sm">view</a>
                </td>
            </tr>
            <?php $id++;}?>

        </tbody>
    </table>
</div>