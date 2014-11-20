<?php
function isLoggedIn()
{
  //for now, just return true
  return 1;
}
function accessLevel()
{
  // These are the built in access levels
  // 0 - sudo, can do anything, closed from release version
  // 1 -superAdmin, can do pretty much everything except manage low-level processes
  // 2 - admins, can do most things except server management
  // 3 - users, can comment and see allowed pages, may also have profile
  // 4 - guests, can only see public posts
  
  //for now, just return 0 for debugging purposes
  return 0;
}
?>
