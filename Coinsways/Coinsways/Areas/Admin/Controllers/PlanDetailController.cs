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
    public class PlanDetailController : Controller
    {
        private CoinswaysDbEntities db = new CoinswaysDbEntities();

        // GET: /Admin/PlanDetail/
        public ActionResult Index()
        {
            var plandetails = db.PlanDetails.Include(p => p.CurrencyCode);
            return View(plandetails.ToList());
        }

        // GET: /Admin/PlanDetail/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            PlanDetail plandetail = db.PlanDetails.Find(id);
            if (plandetail == null)
            {
                return HttpNotFound();
            }
            return View(plandetail);
        }

        // GET: /Admin/PlanDetail/Create
        public ActionResult Create()
        {
            ViewBag.CurrencyId = new SelectList(db.CurrencyCodes, "Id", "CurrencyCode1");
            return View();
        }

        // POST: /Admin/PlanDetail/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include="Id,Name,ForDays,MinAmount,MaxAmount,LaunchDate,StartDate,EndDate,IsActive,CurrencyId")] PlanDetail plandetail)
        {
            if (ModelState.IsValid)
            {
                db.PlanDetails.Add(plandetail);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            ViewBag.CurrencyId = new SelectList(db.CurrencyCodes, "Id", "CurrencyCode1", plandetail.CurrencyId);
            return View(plandetail);
        }

        // GET: /Admin/PlanDetail/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            PlanDetail plandetail = db.PlanDetails.Find(id);
            if (plandetail == null)
            {
                return HttpNotFound();
            }
            ViewBag.CurrencyId = new SelectList(db.CurrencyCodes, "Id", "CurrencyCode1", plandetail.CurrencyId);
            return View(plandetail);
        }

        // POST: /Admin/PlanDetail/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include="Id,Name,ForDays,MinAmount,MaxAmount,LaunchDate,StartDate,EndDate,IsActive,CurrencyId")] PlanDetail plandetail)
        {
            if (ModelState.IsValid)
            {
                db.Entry(plandetail).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            ViewBag.CurrencyId = new SelectList(db.CurrencyCodes, "Id", "CurrencyCode1", plandetail.CurrencyId);
            return View(plandetail);
        }

        // GET: /Admin/PlanDetail/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            PlanDetail plandetail = db.PlanDetails.Find(id);
            if (plandetail == null)
            {
                return HttpNotFound();
            }
            return View(plandetail);
        }

        // POST: /Admin/PlanDetail/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            PlanDetail plandetail = db.PlanDetails.Find(id);
            db.PlanDetails.Remove(plandetail);
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
