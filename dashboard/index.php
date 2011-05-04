<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
  
	<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="author" lang="cs" content="David Kohout; http://www.davidkohout.cz" />
    <meta name="copyright" lang="cs" content="David Kohout; http://www.davidkohout.cz" />
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    <meta name="robots" content="all,follow" />
    <link href="mycss/screen.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <title>Scribble Admin Board</title>
  </head>

  <body>
    <div id="layout">
        <div class="rbroundbox">
	         <div class="rbtop"><div></div></div>
		          <div class="rbcontent">	
          			<div class="content">
              		<h2>Scribble Admin Board</h2>
									<!-- go to site hmepage by button -->
									<br /><button onClick="parent.location='../index.php'" style="height: 50px; width: 200px" >Site</button>
              	</div>
              	<div id="panel-right"><div id="panel-right-inside">
									<p>
										<?php
											include($_SERVER['DOCUMENT_ROOT'] . "/class/articlesmanagement.php");
											include($_SERVER['DOCUMENT_ROOT'] . "/class/loginlog.php");
											include($_SERVER['DOCUMENT_ROOT'] . "/class/file.php");
											$last_article = LastArticle();
											$last_login = ReadLogInfo();
											$path = $_SERVER['DOCUMENT_ROOT'] . "/parameters/id_articles";
											$last_title = readLine($path, $last_article);
											// data
											echo (date("l, d F Y")) . "<br /><br />";
											// articles number
											echo "There are <b>" . $last_article . "</b> articles<br/ >";
											// articles number
											echo "Last article title: <b>" . $last_title . "</b><br/ >";
											// last login
											echo "Last login: <b>" . $last_login . "</b><br/ >";
											//SaveLogInfo();
										?>
									</p>
             		</div>
							</div>	
          			
        		  </div>
	         			<div class="rbbot">
									<div></div>
								</div>
        			</div>

        <div id="main">
					<?php 
						include($_SERVER['DOCUMENT_ROOT'] . "/class/password_protect.php");			
					?>
						<center>
						<b>SELECT:</b><br/ ><br/ >
						<button onClick="parent.location='newarticle.php'" style="height: 50px; width: 200px" >New article</button><br/ ><br/ >
						<button onClick="parent.location='deletearticle.php'" style="height: 50px; width: 200px" >Delete article</button><br/ ><br/ >
						<button onClick="parent.location='selectarticle.php'" style="height: 50px; width: 200px" >Change article</button><br/ ><br/ >
						<hr align="center" size="1" width="200" noshade>
						<br/ >
						<button onClick="parent.location='preferences.php'" style="height: 50px; width: 200px" >Preferences</button><br/ ><br/ >
						<button onClick="parent.location='index.php?logout=1'" style="height: 50px; width: 200px" >Logout</button>
						</center>
						<br/ ><br/ >
        </div>
        </div>
        </div><div style="clear: both;"></div></div>
  </body>
</html>
