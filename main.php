<div class="cardown" id="cardownid">
                <?php
                    $con=new mysqli("localhost","root","suravijay","jay");
                    if($con)
                    {
                           $query="select image,title,description,date from contents where approved=1 order by date desc limit 5";
                        $result=$con->query($query);
                        if($result->num_rows>0)
                        {
                            while($row=$result->fetch_assoc())
                            {
                                ?>
                                 <div class="blog-card">
                                    <img src="<?php 
                                    $arr=explode('/',$row['image']);
                                    $category=$arr[5];
                                    $asli_path="pages/".$category."/img/".basename($row['image']);
                                    echo $asli_path;
                                    ?>" alt="Blog Image">
                                    <div class="blog-details">
                                        <div class="title-and-date">
                                            <h2 class="blog-title"><?php echo $row['title'];?></h2>
                                            <span class="blog-date"><?php echo $row['date'];?></span>
                                        </div>
                                        <p class="blog-description"><?php echo $row['description'];?></p>
                                         <a href="
                                         <?php
                                                $blog_path="blog/".$row['title'].".php";
                                                echo $blog_path;
                                         ?>
                                         " class="read-more">Read More</a>
                                    </div>
                            </div>
                            
                            <?php
                              
                            }
                              
                        }
                        else{
                            echo "<h1>no data found</h1>";
                          }
                    }
                ?>