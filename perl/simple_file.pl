undef $/;
$text=<>;
# $text=
# "
# This is a sample file.
# It has three lines.
# That's all.
# ";
#$text=~ s/$/<p>/mg;
# $text=~ s/^/<p>/mg;
# $text=~ s/\s+$/<p>/mg;
$text=~ s/^\s*$/<p>/mg;
# $text=~ s/^$/<p>/mg;
print "$text";