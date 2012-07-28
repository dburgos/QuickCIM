var AppRouter = Backbone.Router.extend({
    initialize: function () {
        this.connectionView = new ConnectionView();
        this.tableControlsView = new tableControlsView();
        this.outputView = new outputView();
    }
});

// Init
app = new AppRouter();