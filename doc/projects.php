<?php
require_once("docutil.php");
require_once("projects.inc");
page_head("Choosing BOINC projects");

echo "
<p>
BOINC software is used by many volunteer computing projects.
These projects are completely independent.
Some are based at universities and research labs,
others are run by companies and individuals.

When you participate in a project,
you entrust it with the health of your computer and the privacy of your data.
In deciding whether to participate in a project,
read its web site and consider the following questions:

<ul>
<li> Does it clearly describe its goals,
    and are these goals important and beneficial?
<li> Do you trust that its applications
  won't damage your computer or violate your privacy?
<li> Do you trust it to use proper security practices on its servers?
<li> Who owns the results of the computation?
  Will they be freely available to the public
  or will they belong to a for-profit business?
</ul>

The following list of projects is provided for your information;
they are not endorsed by BOINC or U.C. Berkeley.
You can find other projects using <a href=http://google.com>Google</a>.
<ul>
";
list_start("cellpadding=2, width=100%");
list_heading("Project name<br><span class=note>Mouse over for details; click to visit web site</span>", "Project URL<br><span class=note>Copy and paste into BOINC client</span>");
shuffle($areas);
foreach ($areas as $area) {
    list_bar($area[0]);
    $projects = $area[1];
    shuffle($projects);
    foreach ($projects as $p) {
        $img = "";
        if ($p[5]) {
            $img= "<img align=right vspace=4 hspace=4 src=images/$p[5]>";
        }
        $desc = addslashes($p[4]);
        $x = "<a href=$p[1] onmouseover=\"return escape('$img <b>Home:</b> $p[2]<hr><b>Area:</b> $p[3]<hr><b>Goal:</b> $desc')\">$p[0]</a>";
        $y = $p[1];
        list_item($x, $y);
    }
}
list_end();
echo "
</ul>
<p>
You can participate in several projects, ensuring that
your computer will be kept busy even when one project has no work.
You can control how your resources (such as computer time
and disk space) are divided among these projects.
When you attach to a project, you will be asked for its URL.
This is simply the address of its web site;
copy it from your browser's address field or from the list above.

<script language=\"JavaScript\" type=\"text/javascript\" src=\"wz_tooltip.js\"></script>
";
page_tail();
?>
