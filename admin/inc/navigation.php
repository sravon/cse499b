<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">SB Admin</a>
            </div>

            <!-- Top Menu Items -->
            <?php include 'top_nav.php'; ?>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" >
                <ul class="nav navbar-nav side-nav" style="max-height: 617px;">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#country"><i class="fa fa-globe fa-arrows-v"></i> Country <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="country" class="collapse">
                            <li>
                                <a href="country.php">View All Country</a>
                            </li>
                            <li>
                                <a href="country.php?source=add_country">Add Country</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#university"><i class="fa fa-calculator fa-arrows-v"></i> University <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="university" class="collapse">
                            <li>
                                <a href="university.php?name=view_all_university">View All University</a>
                            </li>
                            <li>
                                <a href="university.php">View All Course</a>
                            </li>
                            
                        </ul>
                    </li> 
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#exam"><i class="fa fa-calculator fa-arrows-v"></i> Exam <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="exam" class="collapse">
                            <li>
                                <a href="exam.php">View All Exam</a>
                            </li>
                            <li>
                                <a href="exam.php?source=add_examination_menu">Add Exam</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="member.php"><i class="fa fa-fw fa-edit"></i> Member</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#forum"><i class="fa fa-forumbee fa-arrows-v"></i> Forum <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="forum" class="collapse">
                            <li>
                                <a href="forum.php">View All forum Elements</a>
                            </li>
                            <li>
                                <a href="forum.php?name=add_new_question_answer">Add Forum Content</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#page"><i class="fa fa-globe fa-arrows-v"></i> Page <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="page" class="collapse">
                            <li>
                                <a href="add_page.php">Add Page</a>
                            </li>
        <?php 
            $allPage =$page->allPage();
            if ($allPage) {
                while($row = mysqli_fetch_array($allPage)){
                    echo '<li>
                                <a href="page.php?page_id='.$row['page_id'].'">'.$row['page_title'].'</a>
                        </li>';
                };
            }
 
         ?>
                        </ul>
                    </li>
                    <li>
                        <a href="review.php"><i class="fa fa-fw fa-edit"></i> Review</a>
                    </li>
                    <li>
                        <a href="imagebox.php"><i class="fa fa-fw fa-wrench"></i> Slide And Image</a>
                    </li>
                    <li>
                        <a href="others.php"><i class="fa fa-fw fa-wrench"></i> Others</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#article"><i class="fa fa-forumbee fa-arrows-v"></i> Article <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="article" class="collapse">
                            <li>
                                <a href="articles.php">View All Article</a>
                            </li>
                            <li>
                                <a href="articles.php?name=add_article">Add Article</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>