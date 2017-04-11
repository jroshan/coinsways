using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using Coinsways.Entities;

namespace Coinsways.Controllers
{
    public class HomeController : Controller
    {
        private CoinswaysDbEntities db = new CoinswaysDbEntities();
        public ActionResult Index()
        {
            var planList = db.PlanDetails.Where(p => p.IsActive).ToList();
            return View(planList);
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
            var planList = db.PlanDetails.Where(p => p.IsActive).ToList();
            return View(planList);
        }
    }
}