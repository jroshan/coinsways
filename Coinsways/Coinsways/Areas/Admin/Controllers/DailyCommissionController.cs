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
    public class DailyCommissionController : Controller
    {
        private CoinswaysDbEntities db = new CoinswaysDbEntities();

        // GET: /Admin/DailyCommission/
        public ActionResult Index()
        {
            return View(db.DailyCommissions.ToList());
        }

        // GET: /Admin/DailyCommission/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            DailyCommission dailycommission = db.DailyCommissions.Find(id);
            if (dailycommission == null)
            {
                return HttpNotFound();
            }
            return View(dailycommission);
        }

        // GET: /Admin/DailyCommission/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: /Admin/DailyCommission/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include="Id,Percentage,Details,IsActive")] DailyCommission dailycommission)
        {
            if (ModelState.IsValid)
            {
                db.DailyCommissions.Add(dailycommission);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(dailycommission);
        }

        // GET: /Admin/DailyCommission/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            DailyCommission dailycommission = db.DailyCommissions.Find(id);
            if (dailycommission == null)
            {
                return HttpNotFound();
            }
            return View(dailycommission);
        }

        // POST: /Admin/DailyCommission/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include="Id,Percentage,Details,IsActive")] DailyCommission dailycommission)
        {
            if (ModelState.IsValid)
            {
                db.Entry(dailycommission).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(dailycommission);
        }

        // GET: /Admin/DailyCommission/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            DailyCommission dailycommission = db.DailyCommissions.Find(id);
            if (dailycommission == null)
            {
                return HttpNotFound();
            }
            return View(dailycommission);
        }

        // POST: /Admin/DailyCommission/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            DailyCommission dailycommission = db.DailyCommissions.Find(id);
            db.DailyCommissions.Remove(dailycommission);
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
