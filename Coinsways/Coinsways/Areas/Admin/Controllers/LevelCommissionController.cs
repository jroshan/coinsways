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
    public class LevelCommissionController : Controller
    {
        private CoinswaysDbEntities db = new CoinswaysDbEntities();

        // GET: /Admin/LevelCommission/
        public ActionResult Index()
        {
            return View(db.LevelCommissions.ToList());
        }

        // GET: /Admin/LevelCommission/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            LevelCommission levelcommission = db.LevelCommissions.Find(id);
            if (levelcommission == null)
            {
                return HttpNotFound();
            }
            return View(levelcommission);
        }

        // GET: /Admin/LevelCommission/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: /Admin/LevelCommission/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include="Id,LevelDetails,Percentage,IsActive")] LevelCommission levelcommission)
        {
            if (ModelState.IsValid)
            {
                db.LevelCommissions.Add(levelcommission);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(levelcommission);
        }

        // GET: /Admin/LevelCommission/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            LevelCommission levelcommission = db.LevelCommissions.Find(id);
            if (levelcommission == null)
            {
                return HttpNotFound();
            }
            return View(levelcommission);
        }

        // POST: /Admin/LevelCommission/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include="Id,LevelDetails,Percentage,IsActive")] LevelCommission levelcommission)
        {
            if (ModelState.IsValid)
            {
                db.Entry(levelcommission).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(levelcommission);
        }

        // GET: /Admin/LevelCommission/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            LevelCommission levelcommission = db.LevelCommissions.Find(id);
            if (levelcommission == null)
            {
                return HttpNotFound();
            }
            return View(levelcommission);
        }

        // POST: /Admin/LevelCommission/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            LevelCommission levelcommission = db.LevelCommissions.Find(id);
            db.LevelCommissions.Remove(levelcommission);
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
