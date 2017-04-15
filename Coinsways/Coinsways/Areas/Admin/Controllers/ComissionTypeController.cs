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
    public class ComissionTypeController : Controller
    {
        private CoinswaysDbEntities db = new CoinswaysDbEntities();

        // GET: /Admin/ComissionType/
        public ActionResult Index()
        {
            return View(db.ComissionTypes.ToList());
        }

        // GET: /Admin/ComissionType/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            ComissionType comissiontype = db.ComissionTypes.Find(id);
            if (comissiontype == null)
            {
                return HttpNotFound();
            }
            return View(comissiontype);
        }

        // GET: /Admin/ComissionType/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: /Admin/ComissionType/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include="Id,Details,IsActive")] ComissionType comissiontype)
        {
            if (ModelState.IsValid)
            {
                db.ComissionTypes.Add(comissiontype);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(comissiontype);
        }

        // GET: /Admin/ComissionType/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            ComissionType comissiontype = db.ComissionTypes.Find(id);
            if (comissiontype == null)
            {
                return HttpNotFound();
            }
            return View(comissiontype);
        }

        // POST: /Admin/ComissionType/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include="Id,Details,IsActive")] ComissionType comissiontype)
        {
            if (ModelState.IsValid)
            {
                db.Entry(comissiontype).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(comissiontype);
        }

        // GET: /Admin/ComissionType/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            ComissionType comissiontype = db.ComissionTypes.Find(id);
            if (comissiontype == null)
            {
                return HttpNotFound();
            }
            return View(comissiontype);
        }

        // POST: /Admin/ComissionType/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            ComissionType comissiontype = db.ComissionTypes.Find(id);
            db.ComissionTypes.Remove(comissiontype);
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
