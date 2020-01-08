#!/usr/bin/perl
      use CGI ':standard';
      print "Content-type: text/html\n\n";
      print "<link rel=\"stylesheet\" type=\"text/css\" href=\"lab042.css\">";
     
      print h1("Submitted Aplication"); 
      $name = param ('first');
      $last = param ('last');
      print h2("Your name is:");
      print p("$name $last\n");
      
      $month = param ('Month');
      $day = param ('Day');
      $year = param ('Year');

      print h2("\n\nYou were born on:");
      print p("$month $day $year\n");
      
      $hschool = param ('Highschool');
      $pschool = param ('PostSecondary');
      $other = param ('Other');

      print h2("You've completed:");
      print p("$hschool $pschool $other");

      $app = param ('app');
      print h2("You want to join because:");
      print p("$app");
