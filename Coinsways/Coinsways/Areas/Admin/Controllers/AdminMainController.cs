using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Coinsways.Areas.Admin.Controllers
{
    public class AdminMainController : Controller
    {
        // GET: Admin/AdminMain
        public ActionResult Index()
        {
            return View();
        }
    }
}