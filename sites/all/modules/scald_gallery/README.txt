== Installation

- Enable scald_gallery and scald_galleria (the default gallery player)
- Download Galleria at http://galleria.io/
- Go to admin/structure/scald/gallery/contexts and choose the Galleria, also
  check player settings.

The following steps is optional and could be use with the latest Scald dev or
the upcoming Scald 1.1 for multiple and drag and drop file upload.

- Download the plupload module.
- Download the plupload library, run 'ant' to build the library. You should have
  a sites/all/libraries/plupload/js folder after the build.
- In each atom type (e.g. for Images it is admin/structure/scald/image) select
  Plupload as the default upload type.

== Using

Gallery can be created using both modal dialog (the add button in the DnD
library) or at atom/add/gallery. However when creating a gallery in a modal
dialog, you can't create another atom in another modal dialog then add it to the
gallery.

The Galleria player support title and description for each gallery item. By
default, item title is the atom title, but it can be overriden locally in the
gallery.

Galleria supports many themes. In the basic theme, title and description can by
displayed by clicking the <i> button at the top left corner.

