using System.Web;
using System.Web.Optimization;

namespace Coinsways
{
    public class BundleConfig
    {
        // For more information on bundling, visit http://go.microsoft.com/fwlink/?LinkId=301862
        public static void RegisterBundles(BundleCollection bundles)
        {
            bundles.Add(new ScriptBundle("~/bundles/jquery").Include(
                        "~/Scripts/jquery-{version}.js",
                        "~/Scripts/jquery.parallaxify.min"));

            bundles.Add(new ScriptBundle("~/bundles/jqueryval").Include(
                        "~/Scripts/jquery.validate*"));

            // Use the development version of Modernizr to develop with and learn from. Then, when you're
            // ready for production, use the build tool at http://modernizr.com to pick only the tests you need.
            bundles.Add(new ScriptBundle("~/bundles/modernizr").Include(
                        "~/Scripts/modernizr-*"));

            bundles.Add(new ScriptBundle("~/bundles/bootstrap").Include(
                      "~/Scripts/bootstrap.js",
                      "~/Scripts/respond.js"));

            bundles.Add(new StyleBundle("~/Content/css").Include(
                      "~/Content/style.css",
                      "~/Content/demo.css"));

            bundles.Add(new ScriptBundle("~/bundles/appjs").Include(
          "~/Scripts/jquery.flexslider-min.js",
          "~/Scripts/jquery.parallaxify.min.js",
          "~/Scripts/jquery.arcticmodal-0.3.min.js",
          "~/Scripts/functions.js",
          "~/Scripts/wow.js"));
        }
    }
}
