using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Web;
using System.Web.Mvc;
using Coinsways.Entities;

namespace Coinsways.Areas.Admin.Controllers
{
    public class AspNetUserLoginController : Controller
    {
        private CoinswaysDbEntities db = new CoinswaysDbEntities();

        // GET: /Admin/AspNetUserLogin/
        public ActionResult Index()
        {
            var aspnetuserlogins = db.AspNetUserLogins.Include(a => a.AspNetUser);
            return View(aspnetuserlogins.ToList());
        }

        // GET: /Admin/AspNetUserLogin/Details/5
        public ActionResult Details(string id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            AspNetUserLogin aspnetuserlogin = db.AspNetUserLogins.Find(id);
            if (aspnetuserlogin == null)
            {
                return HttpNotFound();
            }
            return View(aspnetuserlogin);
        }

        // GET: /Admin/AspNetUserLogin/Create
        public ActionResult Create()
        {
            ViewBag.UserId = new SelectList(db.AspNetUsers, "Id", "Email");
            return View();
        }

        // POST: /Admin/AspNetUserLogin/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include="LoginProvider,ProviderKey,UserId")] AspNetUserLogin aspnetuserlogin)
        {
            if (ModelState.IsValid)
            {
                db.AspNetUserLogins.Add(aspnetuserlogin);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            ViewBag.UserId = new SelectList(db.AspNetUsers, "Id", "Email", aspnetuserlogin.UserId);
            return View(aspnetuserlogin);
        }

        // GET: /Admin/AspNetUserLogin/Edit/5
        public ActionResult Edit(string id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            AspNetUserLogin aspnetuserlogin = db.AspNetUserLogins.Find(id);
            if (aspnetuserlogin == null)
            {
                return HttpNotFound();
            }
            ViewBag.UserId = new SelectList(db.AspNetUsers, "Id", "Email", aspnetuserlogin.UserId);
            return View(aspnetuserlogin);
        }

        // POST: /Admin/AspNetUserLogin/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include="LoginProvider,ProviderKey,UserId")] AspNetUserLogin aspnetuserlogin)
        {
            if (ModelState.IsValid)
            {
                db.Entry(aspnetuserlogin).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            ViewBag.UserId = new SelectList(db.AspNetUsers, "Id", "Email", aspnetuserlogin.UserId);
            return View(aspnetuserlogin);
        }

        // GET: /Admin/AspNetUserLogin/Delete/5
        public ActionResult Delete(string id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            AspNetUserLogin aspnetuserlogin = db.AspNetUserLogins.Find(id);
            if (aspnetuserlogin == null)
            {
                return HttpNotFound();
            }
            return View(aspnetuserlogin);
        }

        // POST: /Admin/AspNetUserLogin/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(string id)
        {
            AspNetUserLogin aspnetuserlogin = db.AspNetUserLogins.Find(id);
            db.AspNetUserLogins.Remove(aspnetuserlogin);
            db.SaveChanges();
            return RedirectToAction("Index");
        }

        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }
    }
}
