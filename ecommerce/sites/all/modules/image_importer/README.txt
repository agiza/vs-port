Image Importer (D7 Module)
===================================

DESCRIPTION
-----------------------------------
This module creates a procedure that reads a folder content and import images
into Drupal system.

INSTALLATION / CONFIGURATION
-----------------------------------
Install module as usual.
Browse the Configuration > Content > Image importer configuration (url: 
/admin/config/content/image_importer).
In the settings form you have to set:
 - Base folder path: Indicates the path from drupal root directory.
 - Affected fields: Checkbox list with all system images field with unlimited
   cardinality.
 - Cron execute: Indicates if import execute with cron task.
 - Basic information with import results on screen (User execution).
 - System registry entries of every import process and main actions.

MODULE PERMISSION
-----------------------------------
There is a special permission for this module. Browse the People > Permission 
(url: /admin/people/permissions).
Add the 'Use image importer' permission for the desired roles.

IMAGE IMPORT PROCESS
-----------------------------------
In order to run the image import process you have to follow the steps:
 - Upload desired and folders and files to the specified path in settings form.
    - Version 1.x provided only 1 import method (folders name represent the 
      node id).
 - Go to Content page (url: /admin/content) and click the 'Import images from 
   FTP folder' link to begin import the process.

IMPORT METHODS
-----------------------------------
Version 1.x
 - Folder name represents the node id.
   In this method, module expects the following content in the base folder path:
    - Collection of folders with the ids of nodes we want to import to.
    - Images inside this folders.
    - 777 FOLDER PERMISSIONS FOR ALL BASE PATH (RECURSIBELY).
