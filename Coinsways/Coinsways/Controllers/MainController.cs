﻿using Coinsways.Entities;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using System.Threading.Tasks;
using Microsoft.AspNet.Identity.Owin;
using Microsoft.AspNet.Identity;
using Microsoft.AspNet.Identity.Owin;
using Microsoft.Owin.Security;
using Coinsways.ViewModels;

namespace Coinsways.Controllers
{
    public class MainController : Controller
    {
        private ApplicationUserManager _userManager;
        private CoinswaysDbEntities db = new CoinswaysDbEntities();

                public MainController()
        {
        }

                public MainController(ApplicationUserManager userManager)
        {
            UserManager = userManager;
        }

        public ApplicationUserManager UserManager
        {
            get
            {
                return _userManager ?? HttpContext.GetOwinContext().GetUserManager<ApplicationUserManager>();
            }
            private set
            {
                _userManager = value;
            }
        }
        // GET: Main
        public ActionResult Index()
        {
            return View();
        }

        public async Task<ActionResult> HelpDesk()
        {
            var loggedUser = await UserManager.FindByIdAsync(User.Identity.GetUserId());
            HelpDeskQuery model = new HelpDeskQuery();
            model.UserId = loggedUser.CoinswaysUserId;
            ViewBag.HelpTypeId = new SelectList(db.HelpTypes.Where(h => h.IsActive == true), "Id", "Name");
            ViewBag.Queries = db.HelpDeskQueries.Where(m => m.UserId == loggedUser.CoinswaysUserId).ToList();
            return View(model);
        }

        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<ActionResult> HelpDesk(HelpDeskQuery model)
        {
            var loggedUser = await UserManager.FindByIdAsync(User.Identity.GetUserId());
            if(ModelState.IsValid)
            {
                try
                {
                    model.CreatedDate = DateTime.Now;
                    db.HelpDeskQueries.Add(model);
                    await db.SaveChangesAsync();
                    TempData["message"] = "Query submitted successfully.";
                    return RedirectToAction("HelpDesk", "Main");
                }
                catch
                {
                    ModelState.AddModelError("", "Oops. Something went wrong, please try later.");
                }

            }

            ViewBag.HelpTypeId = new SelectList(db.HelpTypes.Where(h => h.IsActive == true), "Id", "Name");
            ViewBag.Queries = db.HelpDeskQueries.Where(m => m.UserId == loggedUser.CoinswaysUserId).ToList();
            return View(model);
        }

        public async Task<ActionResult> BitCoinAddress()
        {
            return View();
        }

        public async Task<ActionResult> DirectReferal()
        {
            var currentUserId = User.Identity.GetUserId();
            var loggedUser = await UserManager.FindByIdAsync(currentUserId);
            var directReferalList = new List<ChildUserVM>();

            directReferalList = await db.Database.SqlQuery<ChildUserVM>("exec sp_get_direct_referal {0}", loggedUser.CoinswaysUserId).ToListAsync();
            string strPathAndQuery = HttpContext.Request.Url.PathAndQuery;
            string strUrl = HttpContext.Request.Url.AbsoluteUri.Replace(strPathAndQuery, string.Empty);
            var url = strUrl + Url.Action("Register", "Account", new { refercode = currentUserId });
            ViewBag.ReferUrl = url;
            return View(directReferalList);
        }

        public async Task<ActionResult> MyTeam()
        {
            var currentUserId = User.Identity.GetUserId();
            var loggedUser = await UserManager.FindByIdAsync(currentUserId);
            var directReferalList = new List<ChildUserVM>();

            directReferalList = await db.Database.SqlQuery<ChildUserVM>("exec sp_get_user_tree {0}", loggedUser.CoinswaysUserId).ToListAsync();
            string strPathAndQuery = HttpContext.Request.Url.PathAndQuery;
            string strUrl = HttpContext.Request.Url.AbsoluteUri.Replace(strPathAndQuery, string.Empty);
            var url = strUrl + Url.Action("Register", "Account", new { refercode = currentUserId });
            ViewBag.ReferUrl = url;

            return View(directReferalList);
        }

    }
}