--TEST--
Check for git_tag_tagger presence
--SKIPIF--
<?php if (!extension_loaded("git2")) print "skip"; ?>
--FILE--
<?php
echo "NOT YET";
--XFAIL--
NOT YET
--EXPECT--