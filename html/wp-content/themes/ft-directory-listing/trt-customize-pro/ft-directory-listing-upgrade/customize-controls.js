(function (api) {
  // Extends our custom "ft-directory-listing-upgrade" section.
  api.sectionConstructor["ft-directory-listing-upgrade"] = api.Section.extend({
    // No events for this type of section.
    attachEvents: function () {},

    // Always make the section active.
    isContextuallyActive: function () {
      return true;
    },
  });
})(wp.customize);
