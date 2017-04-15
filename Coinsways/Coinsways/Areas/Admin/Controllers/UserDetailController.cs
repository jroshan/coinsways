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
    public class UserDetailController : Controller
    {
        private CoinswaysDbEntities db = new CoinswaysDbEntities();

        // GET: /Admin/UserDetail/
        public ActionResult Index()
        {
            return View(db.UserDetails.ToList());
        }

        // GET: /Admin/UserDetail/Details/5
        public ActionResult Details(long? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            UserDetail userdetail = db.UserDetails.Find(id);
            if (userdetail == null)
            {
                return HttpNotFound();
            }
            return View(userdetail);
        }

        // GET: /Admin/UserDetail/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: /Admin/UserDetail/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include="UserId,Name,ContactNo,Email,Password,FatherOrHusband,Age,Gender,IsActive,IsParentAdded,IsPlanAdded,CreatedDate,BitcoinNumber,IsReferred")] UserDetail userdetail)
        {
            if (ModelState.IsValid)
            {
                db.UserDetails.Add(userdetail);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(userdetail);
        }

        // GET: /Admin/UserDetail/Edit/5
        public ActionResult Edit(long? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            UserDetail userdetail = db.UserDetails.Find(id);
            if (userdetail == null)
            {
                return HttpNotFound();
            }
            return View(userdetail);
        }

        // POST: /Admin/UserDetail/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include="UserId,Name,ContactNo,Email,Password,FatherOrHusband,Age,Gender,IsActive,IsParentAdded,IsPlanAdded,CreatedDate,BitcoinNumber,IsReferred")] UserDetail userdetail)
        {
            if (ModelState.IsValid)
            {
                db.Entry(userdetail).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(userdetail);
        }

        // GET: /Admin/UserDetail/Delete/5
        public ActionResult Delete(long? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            UserDetail userdetail = db.UserDetails.Find(id);
            if (userdetail == null)
            {
                return HttpNotFound();
            }
            return View(userdetail);
        }

        // POST: /Admin/UserDetail/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(long id)
        {
            UserDetail userdetail = db.UserDetails.Find(id);
            db.UserDetails.Remove(userdetail);
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
