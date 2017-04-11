using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Coinsways.Controllers
{
    public class HomeController : Controller
    {
        public ActionResult Index()
        {
            return View();
        }

        public ActionResult About()
        {
            return View();
        }

        public ActionResult Contact()
        {
            return View();
        }

        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Conatct(string name)
        {
            return View();
        }

        public ActionResult Faqs()
        {
            return View();
        }

        public ActionResult News()
        {
            return View();
        }

        public ActionResult Plan()
        {
            return View();
        }
    }
}