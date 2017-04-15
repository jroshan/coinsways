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
    public class UserParentDetailController : Controller
    {
        private CoinswaysDbEntities db = new CoinswaysDbEntities();

        // GET: /Admin/UserParentDetail/
        public ActionResult Index()
        {
            var userparentdetails = db.UserParentDetails.Include(u => u.UserDetail).Include(u => u.UserDetail1);
            return View(userparentdetails.ToList());
        }

        // GET: /Admin/UserParentDetail/Details/5
        public ActionResult Details(long? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            UserParentDetail userparentdetail = db.UserParentDetails.Find(id);
            if (userparentdetail == null)
            {
                return HttpNotFound();
            }
            return View(userparentdetail);
        }

        // GET: /Admin/UserParentDetail/Create
        public ActionResult Create()
        {
            ViewBag.UserId = new SelectList(db.UserDetails, "UserId", "Name");
            ViewBag.ParentId = new SelectList(db.UserDetails, "UserId", "Name");
            return View();
        }

        // POST: /Admin/UserParentDetail/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include="Id,UserId,ParentId")] UserParentDetail userparentdetail)
        {
            if (ModelState.IsValid)
            {
                db.UserParentDetails.Add(userparentdetail);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            ViewBag.UserId = new SelectList(db.UserDetails, "UserId", "Name", userparentdetail.UserId);
            ViewBag.ParentId = new SelectList(db.UserDetails, "UserId", "Name", userparentdetail.ParentId);
            return View(userparentdetail);
        }

        // GET: /Admin/UserParentDetail/Edit/5
        public ActionResult Edit(long? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            UserParentDetail userparentdetail = db.UserParentDetails.Find(id);
            if (userparentdetail == null)
            {
                return HttpNotFound();
            }
            ViewBag.UserId = new SelectList(db.UserDetails, "UserId", "Name", userparentdetail.UserId);
            ViewBag.ParentId = new SelectList(db.UserDetails, "UserId", "Name", userparentdetail.ParentId);
            return View(userparentdetail);
        }

        // POST: /Admin/UserParentDetail/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include="Id,UserId,ParentId")] UserParentDetail userparentdetail)
        {
            if (ModelState.IsValid)
            {
                db.Entry(userparentdetail).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            ViewBag.UserId = new SelectList(db.UserDetails, "UserId", "Name", userparentdetail.UserId);
            ViewBag.ParentId = new SelectList(db.UserDetails, "UserId", "Name", userparentdetail.ParentId);
            return View(userparentdetail);
        }

        // GET: /Admin/UserParentDetail/Delete/5
        public ActionResult Delete(long? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            UserParentDetail userparentdetail = db.UserParentDetails.Find(id);
            if (userparentdetail == null)
            {
                return HttpNotFound();
            }
            return View(userparentdetail);
        }

        // POST: /Admin/UserParentDetail/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(long id)
        {
            UserParentDetail userparentdetail = db.UserParentDetails.Find(id);
            db.UserParentDetails.Remove(userparentdetail);
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
